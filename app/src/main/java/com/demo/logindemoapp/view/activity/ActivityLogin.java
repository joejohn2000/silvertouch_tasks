package com.demo.logindemoapp.view.activity;

import static android.content.ContentValues.TAG;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.text.TextUtils;
import android.util.Log;
import android.view.View;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;
import androidx.databinding.DataBindingUtil;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProvider;

import com.demo.logindemoapp.R;
import com.demo.logindemoapp.businesslogic.interfaces.GeneralClickListener;
import com.demo.logindemoapp.businesslogic.pojo.PojoLogin;
import com.demo.logindemoapp.businesslogic.pojo.PojoUser;
import com.demo.logindemoapp.businesslogic.viewmodel.activity.ViewModelLogin;
import com.demo.logindemoapp.databinding.ActivityLoginBinding;
import com.demo.logindemoapp.utils.ObjectWrapperForBinder;

import java.util.Objects;

public class ActivityLogin extends AppCompatActivity {

    private ViewModelLogin loginViewModel;

    private ActivityLoginBinding binding;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        binding = DataBindingUtil.setContentView(ActivityLogin.this, R.layout.activity_login);
        loginViewModel = new ViewModelProvider(this).get(ViewModelLogin.class);
        binding.setLifecycleOwner(this);
        binding.setViewModel(loginViewModel);
        setTitle("Sign In");
        loginViewModel.getUser().observe(this, (Observer<? super PojoLogin>) this::validateUserLogin);
        binding.tvSignIn2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(ActivityLogin.this, ActivitySignup.class);
                startActivity(i);

            }
        });

        binding.facebook.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent implicit = new Intent(Intent.ACTION_VIEW, Uri.parse("https://www.facebook.com/SilverTouchTechnologies/"));
                startActivity(implicit);

            }
        });
        binding.google.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent implicit = new Intent(Intent.ACTION_VIEW, Uri.parse("https://www.google.com/"));
                startActivity(implicit);

            }
        });
        binding.linkedin.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent implicit = new Intent(Intent.ACTION_VIEW, Uri.parse("https://www.linkedin.com/company/silver-touch-technologies-ltd"));
                startActivity(implicit);

            }
        });

    }



    private void validateUserLogin(PojoLogin loginUser) {
        if (TextUtils.isEmpty(Objects.requireNonNull(loginUser).getStrEmailAddress())) {
            binding.txtEmailAddress.setError(getString(R.string.error_empty_email));
            binding.txtEmailAddress.requestFocus();
        } else if (!loginUser.isEmailValid()) {
            binding.txtEmailAddress.setError(getString(R.string.error_invalid_email));
            binding.txtEmailAddress.requestFocus();
        } else if (TextUtils.isEmpty(Objects.requireNonNull(loginUser).getStrPassword())) {
            binding.txtPassword.setError(getString(R.string.error_empty_password));
            binding.txtPassword.requestFocus();
        } else if (!loginUser.isPasswordLengthGreaterThan5()) {
            binding.txtPassword.setError(getString(R.string.error_invalid_password));
            binding.txtPassword.requestFocus();
        } else if (TextUtils.isEmpty(Objects.requireNonNull(loginUser).getStrOtp())) {
            binding.txtOtp.setError(getString(R.string.error_empty_otp));
            binding.txtOtp.requestFocus();
        } else if (!loginUser.isOtpLengthGreaterThan3()) {
            binding.txtOtp.setError(getString(R.string.error_invalid_otp));
            binding.txtOtp.requestFocus();
        } else {
            final Bundle bundle = new Bundle();
            bundle.putBinder("object_value", new ObjectWrapperForBinder(loginUser));
            startActivity(new Intent(this, ActivityMain.class).putExtras(bundle));
            finish();
        }
    }
}