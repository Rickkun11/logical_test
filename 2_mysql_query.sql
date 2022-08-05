CREATE TABLE tb_mahasiswa (
    mhs_id int PRIMARY KEY,
    mhs_nama varchar(50),
    mhs_angkatan year
);
CREATE TABLE tb_mahasiswa_nilai (
    mhs_nilai_id int(2),
    mhs_id int PRIMARY KEY,
    mk_id int(2),
    nilai float(20),
);
CREATE TABLE tb_matakuliah(
    mk_id int PRIMARY KEY,
    mk_kode varchar(10),
    mk_sks int(2),
    mk_nama varchar(50),

);