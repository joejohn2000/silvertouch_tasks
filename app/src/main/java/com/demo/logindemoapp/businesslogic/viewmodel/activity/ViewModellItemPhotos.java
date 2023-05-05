package com.demo.logindemoapp.businesslogic.viewmodel.activity;

import androidx.lifecycle.ViewModel;

import com.demo.logindemoapp.businesslogic.pojo.PojoMail;

public class ViewModellItemPhotos extends ViewModel {

    public PojoMail pojoMail;


    public void setPojoDetails(PojoMail pojoMail) {
        this.pojoMail = pojoMail;
    }
}