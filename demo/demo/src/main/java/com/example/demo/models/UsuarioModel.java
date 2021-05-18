package com.example.demo.models;

import javax.persistence.*;

@Entity  //objeto que hace una correspondencia entre las variables de java y los campos de la db
@Table(name = "usuario") //generacion de tabla de prueba para 
public class UsuarioModel {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(unique = true, nullable = false)
    private int id;

    private String nombre;
    private String contrasenia;
    private String correo;

    public void setCorreo(String correo){
        this.correo = correo;
    }

    public String getcorreo(){
        return correo;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getContrasenia() {
        return contrasenia;
    }

    public void setContrasenia(String contrasenia) {
        this.contrasenia = contrasenia;
    }
    
}