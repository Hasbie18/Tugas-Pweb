use UAS_PBO

CREATE TABLE [barang] (
  [id] int PRIMARY KEY NOT NULL IDENTITY(1, 1),
  [nama_barang] nvarchar(255),
  [id_kategori] int,
  [stok] int,
  [deskripsi] text,
  [harga_sewa] int,
  [harga_denda] int
)
GO

CREATE TABLE [akun] (
  [id] int PRIMARY KEY NOT NULL IDENTITY(1, 1),
  [nama] nvarchar(255),
  [telepon] nvarchar(255),
  [alamat] nvarchar(255),
  [email] nvarchar(255),
  [password] nvarchar(255),
  [gender] nvarchar(255) NOT NULL CHECK ([gender] IN ('Laki-laki', 'Perempuan')),
  [tempat_lahir] nvarchar(255),
  [tanggal_lahir] date,
  [role] nvarchar(255) NOT NULL CHECK ([role] IN ('Admin', 'Employee', 'Customer'))
)
GO

CREATE TABLE [kategori] (
  [id] int PRIMARY KEY NOT NULL IDENTITY(1, 1),
  [kategori] nvarchar(255)
)
GO

CREATE TABLE [transaksi] (
  [id] int PRIMARY KEY NOT NULL IDENTITY(1, 1),
  [tanggal] datetime,
  [id_customer] int,
  [id_petugas] int,
  [jaminan] nvarchar(255),
  [tanggal_pengembalian] datetime,
  [total_denda] int,
  [total_harga] int,
  [status] nvarchar(255) NOT NULL CHECK ([status] IN ('Proses', 'Selesai')),
  [updated_at] datetime
)
GO

CREATE TABLE [detail_transaksi] (
  [id] int PRIMARY KEY NOT NULL IDENTITY(1, 1),
  [id_transaksi] int,
  [id_barang] int,
  [sub_total] int
)
GO

ALTER TABLE [barang] ADD FOREIGN KEY ([id_kategori]) REFERENCES [kategori] ([id])
GO

ALTER TABLE [transaksi] ADD FOREIGN KEY ([id_customer]) REFERENCES [akun] ([id])
GO

ALTER TABLE [transaksi] ADD FOREIGN KEY ([id_petugas]) REFERENCES [akun] ([id])
GO

ALTER TABLE [detail_transaksi] ADD FOREIGN KEY ([id_transaksi]) REFERENCES [transaksi] ([id])
GO

ALTER TABLE [detail_transaksi] ADD FOREIGN KEY ([id_barang]) REFERENCES [barang] ([id])
GO