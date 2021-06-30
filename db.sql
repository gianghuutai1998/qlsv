CREATE DATABASE QLSV;
USE QLSV;

CREATE TABLE GIAOVIEN(
	MaGV 		NVARCHAR(50) NOT NULL PRIMARY KEY,
	TenGV 		NVARCHAR(50) NOT NULL,
	GioiTinh	INT(1) NOT NULL,
	QueQuan		NVARCHAR(50)
);

CREATE TABLE KHOA(
    MaKhoa      NVARCHAR(50) NOT NULL PRIMARY KEY,
    TenKhoa     NVARCHAR(50) NOT NULL,
    MaCNKhoa    NVARCHAR(50),
    FOREIGN KEY (MaCNKhoa) REFERENCES GIAOVIEN(MaGV)
    ON DELETE SET NULL
);

CREATE TABLE LOP(
    MaLop       NVARCHAR(50) NOT NULL PRIMARY KEY,
    TenLop      NVARCHAR(50) NOT NULL,
    MaKhoa      NVARCHAR(50),
    MaGVCN      NVARCHAR(50),
    FOREIGN KEY (MaKhoa) REFERENCES KHOA(MaKhoa),
    FOREIGN KEY (MaGVCN) REFERENCES GIAOVIEN(MaGV)
    ON DELETE SET NULL
);

CREATE TABLE SINHVIEN(
    MaSV        NVARCHAR(50) NOT NULL PRIMARY KEY,
    TenSV       NVARCHAR(50) NOT NULL,
    GioiTinh    INT(1) NOT NULL,
    MaLop       NVARCHAR(50),
    QueQuan     NVARCHAR(50),
    FOREIGN KEY (MaLop) REFERENCES LOP(MaLop)
);

CREATE TABLE MONHOC(
    MaMH        NVARCHAR(50) NOT NULL PRIMARY KEY,
    TenMH       NVARCHAR(50) NOT NULL,
    SoTinChi    INT(1) NOT NULL
);

CREATE TABLE DIEMTHI(
    MaMH        NVARCHAR(50),
    MaSV        NVARCHAR(50),
    LanThi      INT(1) NOT NULL,
    DiemThi     FLOAT NOT NULL,
    FOREIGN KEY (MaSV) REFERENCES SINHVIEN(MaSV)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
    FOREIGN KEY (MaMH) REFERENCES MONHOC(MaMH)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

INSERT INTO MONHOC(MaMH, TenMH, SoTinChi) VALUE 
    ('TIN001', 'CSDL và Giải thuật', 3),
    ('TIN002', 'Lập trình hướng đối tượng', 3),
    ('TOA001', 'Xác suất thống kê', 3),
    ('TOA002', 'Toán', 4);

INSERT INTO GIAOVIEN(MaGV, TenGV, GioiTinh, QueQuan) VALUE 
    ('GV001', 'Lê Thu Thảo', 0, 'Huế'),
    ('GV002', 'Nguyễn Văn Đông', 1, 'Đà Nẵng'),
    ('GV003', 'Hồ Phú Quang', 1, 'HCM'),
    ('GV004', 'Trần Nguyễn Bảo Thi', 0, 'Quảng Trị'),
    ('GV005', 'Lê Đăng Long', 1, 'Quảng Bình');

INSERT INTO KHOA(MaKhoa, TenKhoa, MaCNKhoa) VALUE 
    ('KCNTT', 'Khoa Công nghệ Thông tin', 'GV005'),
    ('KTOAN', 'Khoa Toán', 'GV001');

INSERT INTO LOP(MaLop, TenLop, MaKhoa, MaGVCN) VALUE
    ('L001', 'A', 'KTOAN', 'GV002'),
    ('L002', 'B', 'KCNTT', 'GV004'),
    ('L003', 'C', 'KCNTT', 'GV005');

INSERT INTO SINHVIEN(MaSV, TenSV, GioiTinh, MaLop, QueQuan) VALUE
    ('001', 'Phạm Thanh Tú', 0, 'L001', 'Quảng Bình'),
    ('002', 'Lê Đình Long', 1, 'L001', 'Huế'), 
    ('003', 'Phạm Hữu Phong', 1, 'L001', 'Đà Nẵng'),
    ('004', 'Lê Thị Hiền', 0, 'L001', 'Quảng Trị'),
    ('005', 'Lê Công Bảo', 1, 'L001', 'Đà Nẵng'),
    ('006', 'Lê Đình Thiện', 1, 'L002', 'Quảng Trị'),
    ('007', 'Phạm Tấn Hùng', 1, 'L002', 'Đà Nẵng'),
    ('008', 'Traafb Yến Nhi', 0, 'L002', 'Quảng Bình'),
    ('009', 'Huỳnh Văn Tuấn', 1, 'L002', 'Huế'),
    ('010', 'Giang Phạm', 1, 'L003', 'Quảng Bình'),
    ('011', 'Phạm Thanh Tú', 1, 'L003', 'Huế'),
    ('012', 'Nguyễn Như Ngọc', 0, 'L003', 'Huế'),
    ('013', 'Trần Minh Châu', 0, 'L003', 'Quảng Bình'),
    ('014', 'Phạm Lê Cẩm Lệ', 0, 'L003', 'HCM');

INSERT INTO DIEMTHI(MaMH, MaSV, LanThi, DiemThi) VALUE
    ('TOA001', '001', 1, 8),
    ('TOA002', '002', 1, 6),
    ('TOA001', '003', 1, 7),
    ('TOA002', '004', 1, 9),
    ('TOA002', '005', 1, 10),
    ('TIN001', '006', 1, 5),
    ('TIN001', '007', 1, 7),
    ('TIN002', '008', 1, 8),
    ('TIN001', '009', 1, 8),
    ('TIN001', '010', 1, 9),
    ('TIN001', '011', 1, 8),
    ('TIN002', '012', 1, 9),
    ('TIN001', '013', 1, 8),
    ('TIN001', '014', 1, 10),
    ('TIN002', '014', 1, 8);