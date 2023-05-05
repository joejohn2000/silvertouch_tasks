package com.demo.logindemoapp.businesslogic.pojo;

import android.util.Patterns;

import androidx.databinding.BaseObservable;

public class PojoUser extends BaseObservable {
    private String strFirstName = "";
    private String strLastName = "";
    private String strEmailAddress = "";
    private String strPassword = "";
    private String strConfirmPassword = "";

    private int selectedItemPosition;


    public PojoUser(String strFirstName,String strLastName,String strEmailAddress, String strPassword, String strConfirmPassword) {
        this.strFirstName = strFirstName;
        this.strLastName = strLastName;
        this.strEmailAddress = strEmailAddress;
        this.strPassword = strPassword;
        this.strConfirmPassword = strConfirmPassword;



    }

    public String getStrFirstName() {
        return strFirstName;
    }
    public void setStrFirstName(String strFirstName) {
        this.strFirstName = strFirstName;
    }

    public String getStrLastName() {
        return strLastName;
    }
    public void setStrLastName(String strLastName) {
        this.strLastName = strLastName;
    }

    public String getStrEmailAddress() {
        return strEmailAddress;
    }

    public void setStrEmailAddress(String strEmailAddress) {
        this.strEmailAddress = strEmailAddress;
    }

    public String getStrPassword() {
        return strPassword;
    }

    public void setStrPassword(String strPassword) {
        this.strPassword = strPassword;
    }

    public String getStrConfirmPassword() {
        return strConfirmPassword;
    }



    public boolean isEmailValid() {
        return Patterns.EMAIL_ADDRESS.matcher(getStrEmailAddress()).matches();
    }


    public boolean isPasswordLengthGreaterThan5() {
        return getStrPassword().length() > 5;
    }

    public boolean isConfirmPasswordLengthGreaterThan5() {
        return getStrConfirmPassword().length() > 5;
    }

    public boolean isPasswordMatch() {
        return getStrPassword().equals(getStrConfirmPassword());
    }

}
