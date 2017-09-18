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
public class Fakultas {
    int id_fakultas;
    String kode_fakultas;
    String nama_fakultas;

    public int getId_fakultas() {
        return id_fakultas;
    }

    public String getKode_fakultas() {
        return kode_fakultas;
    }

    public String getNama_fakultas() {
        return nama_fakultas;
    }

    public void setId_fakultas(int id_fakultas) {
        this.id_fakultas = id_fakultas;
    }

    public void setKode_fakultas(String kode_fakultas) {
        this.kode_fakultas = kode_fakultas;
    }

    public void setNama_fakultas(String nama_fakultas) {
        this.nama_fakultas = nama_fakultas;
    }

    public Fakultas(int id_fakultas, String kode_fakultas, String nama_fakultas) {
        this.id_fakultas = id_fakultas;
        this.kode_fakultas = kode_fakultas;
        this.nama_fakultas = nama_fakultas;
    }
}
