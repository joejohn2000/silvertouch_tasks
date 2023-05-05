package com.demo.logindemoapp.businesslogic.viewmodel.activity;

import static androidx.core.app.ActivityCompat.startActivityForResult;



import android.app.DatePickerDialog;
import android.content.ClipData;
import android.content.Intent;
import android.net.Uri;
import android.provider.MediaStore;
import android.view.View;
import android.widget.AdapterView;
import android.widget.EditText;
import android.widget.ImageView;

import androidx.databinding.ObservableField;
import androidx.lifecycle.LiveData;
import androidx.lifecycle.MutableLiveData;
import androidx.lifecycle.ViewModel;

import com.bumptech.glide.Glide;
import com.bumptech.glide.request.RequestOptions;
import com.demo.logindemoapp.businesslogic.pojo.PojoCity;
import com.demo.logindemoapp.businesslogic.pojo.PojoUser;

import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.Date;
import java.util.List;
import java.util.Locale;

public class ViewModelSignup extends ViewModel {

    private static final int PICK_IMAGE_REQUEST = 1;
    private MutableLiveData<Date> selectedDate = new MutableLiveData<>();
    public MutableLiveData<String> firstname = new MutableLiveData<>();
    public MutableLiveData<String> lastname = new MutableLiveData<>();

    public MutableLiveData<String> emailAddress = new MutableLiveData<>();
    public MutableLiveData<String> password = new MutableLiveData<>();
    public MutableLiveData<String> confirmPassword = new MutableLiveData<>();

    private MutableLiveData<PojoUser> userMutableLiveData;
    public final ObservableField<Uri> imageUri = new ObservableField<>();

    private MutableLiveData<PojoUser> clearUserMutableLiveData;

    public MutableLiveData<PojoUser> getUser() {

        if (userMutableLiveData == null) {
            userMutableLiveData = new MutableLiveData<>();
        }
        return userMutableLiveData;

    }


    public MutableLiveData<PojoUser> getClearUser() {

        if (clearUserMutableLiveData == null) {
            clearUserMutableLiveData = new MutableLiveData<>();
        }
        return clearUserMutableLiveData;

    }


    public void onClick(View view) {
        PojoUser signUpUser = new PojoUser(firstname.getValue(), lastname.getValue(), emailAddress.getValue(), password.getValue(), confirmPassword.getValue());
        userMutableLiveData.setValue(signUpUser);
    }

    public void onClearClick(View view) {
        firstname.setValue("");
        lastname.setValue("");
        emailAddress.setValue("");
        password.setValue("");
        confirmPassword.setValue("");
        PojoUser signUpUser = new PojoUser(firstname.getValue(), lastname.getValue(), emailAddress.getValue(), password.getValue(), confirmPassword.getValue());
        userMutableLiveData.setValue(signUpUser);
    }
    public void onDateClick(View view) {
        Calendar calendar = Calendar.getInstance();
        int year = calendar.get(Calendar.YEAR);
        int month = calendar.get(Calendar.MONTH);
        int dayOfMonth = calendar.get(Calendar.DAY_OF_MONTH);

        DatePickerDialog datePickerDialog = new DatePickerDialog(view.getContext(),
                (datePicker, selectedYear, selectedMonth, selectedDayOfMonth) -> {
                    calendar.set(selectedYear, selectedMonth, selectedDayOfMonth);
                    selectedDate.setValue(calendar.getTime());
                    SimpleDateFormat sdf = new SimpleDateFormat("dd/MM/yyyy", Locale.getDefault());
                    ((EditText)view).setText(sdf.format(calendar.getTime()));
                }, year, month, dayOfMonth);

        datePickerDialog.show();
    }
    public void setImageUri(Uri uri) {
        imageUri.set(uri);




    }


    public void onImageClick() {
        Intent intent = new Intent(Intent.ACTION_PICK, MediaStore.Images.Media.EXTERNAL_CONTENT_URI);
        startActivityForResult(intent, PICK_IMAGE_REQUEST);
    }

    private void startActivityForResult(Intent intent, int pickImageRequest) {
    }

}
