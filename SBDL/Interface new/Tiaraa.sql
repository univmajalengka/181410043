-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jan 25, 2018 at 02:24 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- Database: `Tiaraa`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `t_admin`
-- 

CREATE TABLE `t_admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `t_admin`
-- 

INSERT INTO `t_admin` VALUES ('wulandari', 'ebeg09');
INSERT INTO `t_admin` VALUES ('tiarawd', 'kitty02');

-- --------------------------------------------------------

-- 
-- Table structure for table `t_desk_pemesanan`
-- 

CREATE TABLE `t_desk_pemesanan` (
  `id_pemesanan` int(10) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `jumlah_beli` int(10) NOT NULL,
  `jumlah_harga` int(10) NOT NULL,
  PRIMARY KEY  (`id_pemesanan`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `t_desk_pemesanan`
-- 

INSERT INTO `t_desk_pemesanan` VALUES (133, 445, 2, 100);
INSERT INTO `t_desk_pemesanan` VALUES (134, 446, 4, 280);

-- --------------------------------------------------------

-- 
-- Table structure for table `t_konsumen`
-- 

CREATE TABLE `t_konsumen` (
  `id_konsumen` int(10) NOT NULL,
  `nm_konsumen` varchar(50) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `telp` int(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  PRIMARY KEY  (`id_konsumen`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `t_konsumen`
-- 

INSERT INTO `t_konsumen` VALUES (456, 'Wulandari', 'Bandung', 2147483647, 'wulandri09@gmail.com');
INSERT INTO `t_konsumen` VALUES (457, 'Tiaraw', 'Cirebon', 2147483647, 'rarawkity99@gmail.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `t_pemesanan`
-- 

CREATE TABLE `t_pemesanan` (
  `id_pemesanan` int(10) NOT NULL,
  `id_konsumen` int(10) NOT NULL,
  `total_biaya` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal` int(7) NOT NULL,
  PRIMARY KEY  (`id_pemesanan`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `t_pemesanan`
-- 

INSERT INTO `t_pemesanan` VALUES (123, 345, '100.000', 'terjual', 2);
INSERT INTO `t_pemesanan` VALUES (124, 246, '140.000', 'terjual', 9);

-- --------------------------------------------------------

-- 
-- Table structure for table `t_produk`
-- 

CREATE TABLE `t_produk` (
  `id_produk` int(10) NOT NULL,
  `nm_produk` varchar(50) NOT NULL,
  `harga_produk` varchar(20) NOT NULL,
  `deskripsi_produk` varchar(30) NOT NULL,
  PRIMARY KEY  (`id_produk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `t_produk`
-- 

INSERT INTO `t_produk` VALUES (101, 'Baju', '50.000', 'Berbagai warna');
INSERT INTO `t_produk` VALUES (104, 'Sepatu', '70.000', 'Berbagai size');
