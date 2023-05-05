package com.demo.logindemoapp.view.activity;

import static androidx.core.app.ActivityCompat.startActivityForResult;

import android.content.ClipData;
import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.text.TextUtils;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Toast;
import androidx.appcompat.app.AppCompatActivity;
import androidx.databinding.DataBindingUtil;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProvider;

import com.bumptech.glide.Glide;
import com.bumptech.glide.load.resource.bitmap.RoundedCorners;
import com.bumptech.glide.request.RequestOptions;
import com.demo.logindemoapp.R;
import com.demo.logindemoapp.businesslogic.pojo.PojoCity;
import com.demo.logindemoapp.businesslogic.pojo.PojoUser;
import com.demo.logindemoapp.businesslogic.viewmodel.activity.ViewModelSignup;
import com.demo.logindemoapp.databinding.ActivitySignupBinding;
import com.demo.logindemoapp.utils.ObjectWrapperForBinder;

import java.util.ArrayList;
import java.util.List;
import java.util.Objects;

public class ActivitySignup extends AppCompatActivity {

    private ViewModelSignup signupViewModel;
    private static final int PICK_IMAGE_REQUEST = 1;
    private ActivitySignupBinding binding;
    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data) {
        super.onActivityResult(requestCode, resultCode, data);

        if(requestCode == PICK_IMAGE_REQUEST && resultCode == RESULT_OK && data != null && data.getData() != null) {
            Uri imageUri = data.getData();

                Glide.with(this)
                        .load(imageUri)
                        .apply(RequestOptions.circleCropTransform())
                        .into(binding.ivUserPic);

        }
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        binding = DataBindingUtil.setContentView(ActivitySignup.this, R.layout.activity_signup);
        signupViewModel = new ViewModelProvider(this).get(ViewModelSignup.class);
        binding.setLifecycleOwner(this);
        binding.setViewModel(signupViewModel);


        Objects.requireNonNull(getSupportActionBar()).setTitle(getString(R.string.text_sign_up));

        signupViewModel.getUser().observe(this, (Observer<? super PojoUser>) this::validateUserSignUp);
        signupViewModel.getClearUser().observe(this, (Observer<? super PojoUser>) this::clearUserSignUpInputs);


        ArrayAdapter adapter = ArrayAdapter.createFromResource(this, R.array.place, R.layout.spinner_items);
        binding.spinner.setAdapter(adapter);
        binding.ivUserPic.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent();
                intent.setType("image/*");
                intent.setAction(Intent.ACTION_GET_CONTENT);
                startActivityForResult(Intent.createChooser(intent, "Select Picture"), PICK_IMAGE_REQUEST);

            }
        });


    }
    private void clearUserSignUpInputs(PojoUser signUpUser) {
        binding.txtFirstName.setError(null);
        binding.txtFirstName.clearFocus();
        binding.txtLastName.setError(null);
        binding.txtLastName.clearFocus();
        binding.txtEmailAddress.setError(null);
        binding.txtEmailAddress.clearFocus();
        binding.txtPassword.setError(null);
        binding.txtPassword.clearFocus();
        binding.txtConfirmPassword.setError(null);
        binding.txtConfirmPassword.clearFocus();
        binding.chkAgreeTerms.setChecked(false);
    }

    public void signinClick(View view) {
        onBackPressed();
    }


    private void validateUserSignUp(PojoUser signUpUser) {

        if (TextUtils.isEmpty(Objects.requireNonNull(signUpUser).getStrFirstName())) {
            binding.txtFirstName.setError(getString(R.string.error_empty_first));
            binding.txtFirstName.requestFocus();
        } else if (TextUtils.isEmpty(Objects.requireNonNull(signUpUser).getStrLastName())) {
            binding.txtLastName.setError(getString(R.string.error_empty_first));
            binding.txtLastName.requestFocus();
        } else if (TextUtils.isEmpty(Objects.requireNonNull(signUpUser).getStrEmailAddress())) {
            binding.txtEmailAddress.setError(getString(R.string.error_empty_email));
            binding.txtEmailAddress.requestFocus();
        } else if (!signUpUser.isEmailValid()) {
            binding.txtEmailAddress.setError(getString(R.string.error_invalid_email));
            binding.txtEmailAddress.requestFocus();
        } else if (TextUtils.isEmpty(Objects.requireNonNull(signUpUser).getStrPassword())) {
            binding.txtPassword.setError(getString(R.string.error_empty_password));
            binding.txtPassword.requestFocus();
        } else if (!signUpUser.isPasswordLengthGreaterThan5()) {
            binding.txtPassword.setError(getString(R.string.error_invalid_password));
            binding.txtPassword.requestFocus();
        } else if (TextUtils.isEmpty(Objects.requireNonNull(signUpUser).getStrConfirmPassword())) {
            binding.txtConfirmPassword.setError(getString(R.string.error_empty_password));
            binding.txtConfirmPassword.requestFocus();
        } else if (!signUpUser.isConfirmPasswordLengthGreaterThan5()) {
            binding.txtConfirmPassword.setError(getString(R.string.error_invalid_password));
            binding.txtConfirmPassword.requestFocus();
        } else if (!signUpUser.isPasswordMatch()) {
            binding.txtConfirmPassword.setError(getString(R.string.error_password_match));
            binding.txtConfirmPassword.requestFocus();
        } else if (!binding.chkAgreeTerms.isChecked()) {
            binding.chkAgreeTerms.setError(getString(R.string.error_agree_terms_condition));

        } else {
            final Bundle bundle = new Bundle();
            bundle.putBinder("object_value", new ObjectWrapperForBinder(signUpUser));
            startActivity(new Intent(this, ActivityLogin.class).putExtras(bundle));
            Log.d("ActivityLogin", "original object=" + signUpUser);
            Toast.makeText(this, getString(R.string.text_login_success), Toast.LENGTH_SHORT).show();
            finish();
        }
    }
}

