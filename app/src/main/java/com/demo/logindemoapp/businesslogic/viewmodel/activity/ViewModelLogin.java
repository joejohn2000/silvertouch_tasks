package com.demo.logindemoapp.businesslogic.viewmodel.activity;

import android.view.View;

import androidx.lifecycle.MutableLiveData;
import androidx.lifecycle.ViewModel;

import com.demo.logindemoapp.R;
import com.demo.logindemoapp.businesslogic.pojo.PojoLogin;
import com.demo.logindemoapp.businesslogic.pojo.PojoUser;


public class ViewModelLogin extends ViewModel {

    public MutableLiveData<String> emailAddress = new MutableLiveData<>();
    public MutableLiveData<String> password = new MutableLiveData<>();

    public MutableLiveData<String> otp = new MutableLiveData<>();

    public MutableLiveData<Boolean> checkBoxRememberMe = new MutableLiveData<>();
    private MutableLiveData<PojoLogin> userMutableLiveData;

    public MutableLiveData<PojoLogin> getUser() {

        if (userMutableLiveData == null) {
            userMutableLiveData = new MutableLiveData<>();
        }
        return userMutableLiveData;

    }


    public void onClick(View view) {
        PojoLogin loginUser = new PojoLogin(emailAddress.getValue(), password.getValue(), otp.getValue());
        userMutableLiveData.setValue(loginUser);
    }

    public void onClearClick(View view) {
        emailAddress.setValue("");
        password.setValue("");
        otp.setValue("");
        checkBoxRememberMe.setValue(false);


    }

    public void isChecked() {
        if (checkBoxRememberMe.getValue() == true) {
            checkBoxRememberMe.setValue(false);
        }
        else {
            checkBoxRememberMe.setValue(true);
        }
    }

}

