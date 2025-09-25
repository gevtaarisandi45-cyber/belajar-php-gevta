--membuat database--
CREATE DATABASE crud_php;
USE crud_php;

--membuat tabel---
 CREATE TABLE buku (
     id INT AUTO_INCREMENT PRIMARY KEY,
     judul VARCHAR(255)NOT NULL,
     nama_pengarang VARCHAR(255) NOT NULL,
     penerbit VARCHAR(255) NOT NULL,
     tahun_terbit YEAR NOT NULL
     );

     --insert minimal 5 data buku--
 INSERT INTO buku (judul, nama_pengarang, penerbit, tahun_terbit) VALUES
    ('Belajar PHP', 'Andi Setiawan', 'Gramedia', 2020),
    ('Laravel untuk pemula', 'Budi Santoso', 'informatika', 2021),
    ('Dasar-dasar mysql', 'Citra Dewi', 'Erlangga', 2019),
    ('Web Programing', 'Deni Pratama', 'MediaKita', 2022),
    ('Algoritma Pemograman', 'Eka Lestari', 'Deepublish', 2018);