package com.demo.logindemoapp.businesslogic.viewmodel.activity;

import android.text.TextUtils;
import android.util.Log;
import android.view.View;

import androidx.databinding.ObservableField;
import androidx.lifecycle.LiveData;
import androidx.lifecycle.MutableLiveData;
import androidx.lifecycle.Transformations;
import androidx.lifecycle.ViewModel;

import com.demo.logindemoapp.businesslogic.pojo.PojoMail;
import com.demo.logindemoapp.businesslogic.pojo.PojoUser;

import java.util.ArrayList;
import java.util.List;


public class ViewModelMain extends ViewModel {
    public PojoMail pojoMail;


    public void setPojoDetails(PojoMail pojoMail) {
        this.pojoMail = pojoMail;
    }
    public MutableLiveData<String> emailAddress = new MutableLiveData<>();

    public MutableLiveData<Boolean> switch1 = new MutableLiveData<>();

    private MutableLiveData<PojoUser> userMutableLiveData;
    public MutableLiveData<PojoUser> getUser() {
        if (userMutableLiveData == null) {
            userMutableLiveData = new MutableLiveData<>();
        }
        return userMutableLiveData;

    }


    public void setLoggedInUserData(PojoUser loginUser) {
        userMutableLiveData.setValue(loginUser);
    }
    public void onClick(View view) {

    }
    public MutableLiveData<String> searchQuery = new MutableLiveData<>();

    ArrayList<PojoMail> listmail = new ArrayList<>();
    public LiveData<List<PojoMail>> filteredList = Transformations.switchMap(searchQuery, query -> {
        MutableLiveData<List<PojoMail>> result = new MutableLiveData<>();
        Log.d("ViewModelMain", "Filtering data with query: " + query);
        Log.d("ViewModelMain", "Listmail: " + listmail);
        // filter the list based on search query
        List<PojoMail> filtered = new ArrayList<>();
        for (PojoMail item : listmail) {
            if (item.getName().toLowerCase().contains(query.toLowerCase())) {
                filtered.add(item);
            }
        }

        result.setValue(filtered);
        return result;
    });






    private MutableLiveData<ArrayList<PojoMail>> filteredData = new MutableLiveData<>();
    private ArrayList<PojoMail> dataList = new ArrayList<>();

    public void setDataList(ArrayList<PojoMail> dataList) {
        this.dataList = dataList;
        filteredData.setValue(dataList);
    }

    public LiveData<ArrayList<PojoMail>> getFilteredData() {
        return filteredData;
    }

    public void filterData(String query) {
        if (TextUtils.isEmpty(query)) {
            filteredData.setValue(dataList);
        } else {
            ArrayList<PojoMail> filteredList = new ArrayList<>();
            for (PojoMail item : dataList) {
                if (item.getName().toLowerCase().contains(query.toLowerCase())) {
                    filteredList.add(item);
                }
            }
            Log.d("ViewModelMain", "Filtered data: " + filteredList);
            filteredData.setValue(filteredList);
        }
    }

}