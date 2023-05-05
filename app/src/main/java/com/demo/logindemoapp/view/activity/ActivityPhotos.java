package com.demo.logindemoapp.view.activity;

import android.content.Intent;
import android.os.Bundle;
import android.text.TextUtils;
import android.util.Log;
import android.view.MenuItem;
import android.view.View;

import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;
import androidx.databinding.DataBindingUtil;

import androidx.lifecycle.ViewModelProvider;
import androidx.recyclerview.widget.GridLayoutManager;
import androidx.recyclerview.widget.LinearLayoutManager;


import com.demo.logindemoapp.R;
import com.demo.logindemoapp.businesslogic.pojo.PojoMail;
import com.demo.logindemoapp.businesslogic.viewmodel.activity.ViewModelPhotos;
import com.demo.logindemoapp.databinding.ActivityPhotosBinding;
import com.demo.logindemoapp.view.adapter.AdapterPhotos;


import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.IOException;
import java.io.InputStream;
import java.nio.charset.StandardCharsets;
import java.util.ArrayList;
import java.util.Collections;

public class ActivityPhotos extends AppCompatActivity {
    private ViewModelPhotos viewModelMenuAction;

    private ActivityPhotosBinding binding;

    private PojoMail pojoMail;


    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        binding = DataBindingUtil.setContentView(ActivityPhotos.this, R.layout.activity_photos);

        pojoMail = (PojoMail)getIntent().getSerializableExtra("key1");
        binding.setPojo(pojoMail);
        viewModelMenuAction = new ViewModelProvider(this).get(ViewModelPhotos.class);



        binding.setLifecycleOwner(this);
        binding.setViewModel(viewModelMenuAction);

        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
        getSupportActionBar().setTitle("Gallery");
        setUpList();



    }
    @Override
    public boolean onOptionsItemSelected(MenuItem menu) {
        int id = menu.getItemId();
        switch (id) {

            case android.R.id.home:

                Intent intent = new Intent(ActivityPhotos.this,ActivityMain.class);
                startActivity(intent);






        }
        return super.onOptionsItemSelected((MenuItem) menu);
    }
    private void setUpList() {
        String data = loadJSONFromAsset();
        ArrayList<PojoMail> listmail = new ArrayList<>();



        try {
            JSONObject jsonObject = new JSONObject(data);
            JSONArray array = jsonObject.getJSONArray("Mail");

            for (int i = 0; i < array.length(); i++){
                JSONObject jsonItem = array.getJSONObject(i);
                if (jsonItem != null){

                    String Name = jsonItem.getString("Name");
                    String Title1 = jsonItem.getString("Title1");
                    String Title2 = jsonItem.getString("Title2");
                    String Time = jsonItem.getString("Time");
                    String Icon = String.valueOf(Name.charAt(0));
                    String id= jsonItem.getString("id");
                    String age= jsonItem.getString("age");
                    String address = jsonItem.getString("adress");
                    String job = jsonItem.getString("job");
                    String date = jsonItem.getString("date");
                    String gender = jsonItem.getString("gender");
                    String sem1Grade = jsonItem.getString("sem_one_grade");
                    String sem2Grade = jsonItem.getString("sem_two_grade");
                    String sem3Grade = jsonItem.getString("sem_three_grade");
                    String sem4Grade = jsonItem.getString("sem_four_grade");
                    String sem5Grade = jsonItem.getString("sem_five_grade");
                    String sem6Grade = jsonItem.getString("sem_six_grade");

                    String image = jsonItem.getString("img");
                    int img = R.drawable.img1;
                    if (TextUtils.equals(image,"img1")){
                        img = R.drawable.img1;
                    }
                    if (TextUtils.equals(image,"img2")){
                        img = R.drawable.img2;
                    }
                    if (TextUtils.equals(image,"img3")){
                        img = R.drawable.img3;
                    }
                    if (TextUtils.equals(image,"img4")){
                        img = R.drawable.img4;
                    }
                    if (TextUtils.equals(image,"img5")){
                        img = R.drawable.img5;
                    }
                    if (TextUtils.equals(image,"img6")){
                        img = R.drawable.img6;
                    }




                    PojoMail pojoMail = new PojoMail(Name, Title1, Title2, Time,date, Icon,id,job,age,gender,address,sem1Grade,sem2Grade,sem3Grade,sem4Grade,sem5Grade,sem6Grade,img);
                    listmail.add(pojoMail);



                }
            }
        }   catch(JSONException e){
            throw new RuntimeException();
        }

        if (!listmail.isEmpty()){
            Collections.sort(listmail, new ActivityMain.CustomComparator()) ;
            setUpList(listmail);
        }

    }


    private void setUpList(ArrayList<PojoMail> listmail){
        AdapterPhotos photosAdapter = new AdapterPhotos(listmail, new AdapterPhotos.OnItemClickListener(){
        @Override
        public void onItemClick(PojoMail item) {
          Intent intent = new Intent(getApplicationContext(), ActivityProfile.class);

            intent.putExtra("PojoMail", item);

            startActivity(intent);
        }
    });
        GridLayoutManager linearLayoutManager = new GridLayoutManager(ActivityPhotos.this,2);
        linearLayoutManager.setOrientation(LinearLayoutManager.VERTICAL);

        binding.rvList.setLayoutManager(linearLayoutManager);
        binding.rvList.setAdapter(photosAdapter);

    }



    public String loadJSONFromAsset() {
        String json = null;
        try {
            InputStream is = getAssets().open("Mail.json");
            int size = is.available();
            byte[] buffer = new byte[size];
            is.read(buffer);
            is.close();
            json = new String(buffer, StandardCharsets.UTF_8);
        } catch (IOException ex) {
            ex.printStackTrace();
            return null;
        }
        return json;
    }
    //start


    public interface OnClickHandlerInterface {

        void onClick(View view, PojoMail pojomail, int position);
    }




    OnClickHandlerInterface OnClickHandlerInterface = new OnClickHandlerInterface() {
        @Override
        public void onClick(View view,PojoMail pojomail,int position) {
            Intent i = new Intent(ActivityPhotos.this, ActivityProfile.class);
            i.putExtra("key1",pojomail);
            startActivity(i);
            switch (view.getId()){
                case R.id.cardView:
                    Log.d(String.valueOf(position), "onClick: done");
                    Log.d(String.valueOf(pojomail), "onClick: done");
                    break;
            }
        }
    };


}
