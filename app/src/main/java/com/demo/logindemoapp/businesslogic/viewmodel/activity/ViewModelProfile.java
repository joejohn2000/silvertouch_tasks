package com.demo.logindemoapp.businesslogic.viewmodel.activity;

import androidx.lifecycle.ViewModel;

import com.demo.logindemoapp.businesslogic.pojo.PojoMail;
public class ViewModelProfile extends ViewModel {
    private PojoMail pojoProfile;

    public ViewModelProfile(PojoMail pojoProfile) {
        this.pojoProfile = pojoProfile;
    }

    public String getName() {
        return pojoProfile.getName();
    }

    public String getId() {
        return pojoProfile.getId();
    }

    public String getAge() {
        return pojoProfile.getAge();
    }

    public String getAddress() {
        return pojoProfile.getAddress();
    }

    public String getSem2Grade() {
        return pojoProfile.getSem2Grade();
    }

    public String getSem3Grade() {
        return pojoProfile.getSem3Grade();
    }

    public String getSem4Grade() {
        return pojoProfile.getSem4Grade();
    }

    public String getSem5Grade() {
        return pojoProfile.getSem5Grade();
    }

    public String getSem6Grade() {
        return pojoProfile.getSem6Grade();
    }
}
