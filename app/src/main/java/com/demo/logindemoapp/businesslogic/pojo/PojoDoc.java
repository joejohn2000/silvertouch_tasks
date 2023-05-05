package com.demo.logindemoapp.businesslogic.pojo;


public class PojoDoc {
    private int doc;
    private String type;

    public PojoDoc(int doc, String type) {
        this.doc = doc;
        this.type = type;
    }

    public int getDoc() {
        return doc;
    }

    public void setDoc(int doc) {
        this.doc = doc;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }
}
