package com.demo.logindemoapp.businesslogic.pojo;

public class PojoCity {
    private int id;
    private String name;

    public PojoCity(int id, String name) {
        this.id = id;
        this.name = name;
    }

    public int getId() {
        return id;
    }

    public String getName() {
        return name;
    }

    @Override
    public String toString() {
        return name;
    }
}