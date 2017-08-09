var handler;

books = function(req, res){
    req.getConnection(function(err, con){
        var subQuery = 'SELECT tb_statusbuku.jlhPeminjam FROM tb_statusbuku WHERE tb_statusbuku.kd_buku = tb_buku.kd_buku'
        var getAllBooks = 'SELECT *, ('+ subQuery +') AS jlhPeminjam FROM tb_buku'; 
        var fetch = con.query(getAllBooks, function(err, rows){
            if(err)
                console.log("Error Selecting : %s ",err );

            res.render('./inventory/buku.html', {data: rows});
        });
    });
}

editBook = function(req, res){
    var ID = req.params.id;
    req.getConnection(function(err, con){
        var getBook = "SELECT * FROM tb_buku WHERE kd_buku=?";
        var fetch = con.query(getBook, [ID], function(err, rows){
            if(err)
                console.log("Error Selecting : %s ",err );
            res.render('./inventory/editBuku.html', {data: rows});
        });
    });
}

upBook = function(req, res){
    var ID = req.params.id;
    var input = JSON.parse(JSON.stringify(req.body));
    req.getConnection(function(err, con){
        var data = {
            jdl_buku: input.judul,
            penulis: input.penulis,
            penerbit: input.penerbit,
            sinopsis: input.deskripsi,
            foto: input.upload
        }
        var upBook = "UPDATE tb_buku SET ? WHERE kd_buku = ?";
        var fetch = con.query(upBook, [data, ID], function(err, rows){
            if(err)
                console.log("Error Selecting : %s ",err );
            res.redirect('/books');
        });
    });
}

dltBook = function(req, res){
    var ID = req.params.id;
    req.getConnection(function(err, con){
        var dltBook = "DELETE FROM tb_buku WHERE kd_buku=?";
        var fetch = con.query(dltBook, [ID], function(err, rows){
            if(err)
                console.log("Error Selecting : %s ",err );
            res.redirect('/books');
        });
    });
}

handler = {
    books: books,
    editBook: editBook,
    upBook:upBook,
    dltBook: dltBook
};

module.exports = handler;