package com.demo.logindemoapp.businesslogic.pojo;

import android.util.Patterns;

public class PojoLogin {
    private String strEmailAddress = "";
    private String strPassword = "";

    private String strOtp="";




    public PojoLogin(String strEmailAddress, String strPassword, String strOtp) {
        this.strEmailAddress = strEmailAddress;
        this.strPassword = strPassword;
        this.strOtp = strOtp;

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

    public String getStrOtp() {
        return strOtp;
    }

    public void setStrOtp(String strOtp) {
        this.strOtp = strOtp;
    }



    public boolean isEmailValid() {
        return Patterns.EMAIL_ADDRESS.matcher(getStrEmailAddress()).matches();
    }


    public boolean isPasswordLengthGreaterThan5() {
        return getStrPassword().length() > 5;
    }

    public boolean isOtpLengthGreaterThan3() {
        return getStrOtp().length() >3;
    }
}
