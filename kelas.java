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
public class kelas {
    private int id_kelas;
    private String nama_kelas;
    private Fakultas fakultas;

    public int getId_kelas() {
        return id_kelas;
    }

    public String getNama_kelas() {
        return nama_kelas;
    }

    public Fakultas getFakultas() {
        return fakultas;
    }

    public void setId_kelas(int id_kelas) {
        this.id_kelas = id_kelas;
    }

    public void setNama_kelas(String nama_kelas) {
        this.nama_kelas = nama_kelas;
    }

    public void setFakultas(Fakultas fakultas) {
        this.fakultas = fakultas;
    }

    public kelas(int id_kelas, String nama_kelas, Fakultas fakultas) {
        this.id_kelas = id_kelas;
        this.nama_kelas = nama_kelas;
        this.fakultas = fakultas;
    }
    
    
}
