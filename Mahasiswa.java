/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaapplication3;

/**
 *
 * @author Biyanesha Master PC
 */
public class Mahasiswa {
    private int nim;
    private String nama;
    private String tgl_lahir;
    private String alamat;
    private String password;
    private String kontak;
    private String email;
    private String fak_prodi;
    private kelas kelas;
    private nilai nilai;

    public int getNim() {
        return nim;
    }

    public String getNama() {
        return nama;
    }

    public String getTgl_lahir() {
        return tgl_lahir;
    }

    public String getAlamat() {
        return alamat;
    }

    public String getPassword() {
        return password;
    }

    public String getKontak() {
        return kontak;
    }

    public String getEmail() {
        return email;
    }

    public String getFak_prodi() {
        return fak_prodi;
    }

    public kelas getKelas() {
        return kelas;
    }

    public nilai getNilai() {
        return nilai;
    }

    public void setNim(int nim) {
        this.nim = nim;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public void setTgl_lahir(String tgl_lahir) {
        this.tgl_lahir = tgl_lahir;
    }

    public void setAlamat(String alamat) {
        this.alamat = alamat;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public void setKontak(String kontak) {
        this.kontak = kontak;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public void setFak_prodi(String fak_prodi) {
        this.fak_prodi = fak_prodi;
    }

    public void setKelas(kelas kelas) {
        this.kelas = kelas;
    }

    public void setNilai(nilai nilai) {
        this.nilai = nilai;
    }

    public Mahasiswa(int nim, String nama, String tgl_lahir, String alamat, String password, String kontak, String email, String fak_prodi, kelas kelas) {
        this.nim = nim;
        this.nama = nama;
        this.tgl_lahir = tgl_lahir;
        this.alamat = alamat;
        this.password = password;
        this.kontak = kontak;
        this.email = email;
        this.fak_prodi = fak_prodi;
        this.kelas = kelas;
    }

    public editProf(String alamat, String kontak, String email) {
        this.alamat = alamat;
        this.kontak = kontak;
        this.email = email;
    }    
}
