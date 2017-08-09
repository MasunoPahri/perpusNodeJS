var handler;

cari = function(req, res){
    res.render('./admin/cariBuku.html');
}

pinjam = function(req, res){
    var steps = req.params.step;
    // console.log(steps);
    if(steps == "new"){
        res.render('./admin/cariBuku.html');
    }
    else if(steps == "dataBuku"){
        var kd_buku = req.body.kdBuku;
        req.getConnection(function(err, con){
            var getBook = "SELECT * FROM tb_buku WHERE kd_buku=?";
            var fetch = con.query(getBook, [kd_buku], function(err, rows){
                if(err)
                    console.log("Error Selecting : %s ",err );
                res.render('./admin/pinjambuku.html', {data: rows, len: rows.length});
            });
        });
    }
    else if(steps == "proses"){
        var input = JSON.parse(JSON.stringify(req.body));
        req.getConnection(function(err, con){
            var data = {
                id_user: input.nim,
                kd_buku: input.kdBuku,
                tglKembali: input.tglKembali,
                status: 1
            }
            var process = "INSERT INTO tb_peminjam SET ?";
            var fetch = con.query(process, data, function(err, rows){
                if(err)
                    console.log("Error Selecting : %s ",err );
                res.redirect('/peminjaman/new');
            });
        });
    }
}

handler = {
	pinjam: pinjam,
    cari: cari
};

module.exports = handler;