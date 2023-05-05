package com.demo.logindemoapp.view.activity;

import androidx.appcompat.app.AppCompatActivity;
import androidx.databinding.DataBindingUtil;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProvider;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.content.Intent;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.SearchView;
import android.widget.Toast;

import com.demo.logindemoapp.R;
import com.demo.logindemoapp.businesslogic.pojo.PojoMail;
import com.demo.logindemoapp.businesslogic.viewmodel.activity.ViewModelMain;
import com.demo.logindemoapp.databinding.ActivityMainBinding;
import com.demo.logindemoapp.view.adapter.AdapterList;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.IOException;
import java.io.InputStream;
import java.nio.charset.StandardCharsets;
import java.util.ArrayList;
import java.util.Comparator;


public class ActivityMain extends AppCompatActivity  {

    private ViewModelMain mainViewModel;

    private ActivityMainBinding binding;

    private RecyclerView recyclerView;
    private SearchView searchView;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        binding = DataBindingUtil.setContentView(this, R.layout.activity_main);
        mainViewModel = new ViewModelProvider(this).get(ViewModelMain.class);
        binding.setLifecycleOwner(this);
        binding.setViewModel(mainViewModel);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
        setUpList();
        searchView = binding.searchView;
        searchView.setOnQueryTextListener(new SearchView.OnQueryTextListener() {
            @Override
            public boolean onQueryTextSubmit(String query) {
                return false;
            }

            @Override
            public boolean onQueryTextChange(String newText) {
                mainViewModel.filterData(newText);
                return true;
            }
        });
        mainViewModel.getFilteredData().observe(this, new Observer<ArrayList<PojoMail>>() {
            @Override
            public void onChanged(ArrayList<PojoMail> filteredList) {
                setUpList(filteredList);
            }
        });
    }
    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.directory, menu);
        return true;
    }


    @Override
    public boolean onOptionsItemSelected(MenuItem menu) {
        int id = menu.getItemId();
        switch (id) {
            case R.id.add:
                Intent i = new Intent(ActivityMain.this, ActivityPhotos.class);

                startActivity(i);
                return true;
            case android.R.id.home:
                Intent intent = new Intent(ActivityMain.this,ActivityLogin.class);
                startActivity(intent);
                return true;
        }
        return super.onOptionsItemSelected((MenuItem) menu);
    }
    private void setUpList() {
        String data = loadJSONFromAsset();
        ArrayList<PojoMail> listmail = new ArrayList<>();
        try {
            JSONObject jsonObject = new JSONObject(data);
            JSONArray array = jsonObject.getJSONArray("Mail");

            for (int i = 0; i < array.length(); i++) {
                JSONObject jsonItem = array.getJSONObject(i);
                if (jsonItem != null) {
                    String Name = jsonItem.getString("Name");
                    String Title1 = jsonItem.getString("Title1");
                    String Title2 = jsonItem.getString("Title2");
                    String Time = jsonItem.getString("Time");
                    String Icon = String.valueOf(Name.charAt(0));
                    String id= jsonItem.getString("id");
                    String age= jsonItem.getString("age");
                    String gender= jsonItem.getString("gender");
                    String address = jsonItem.getString("adress");
                    String job = jsonItem.getString("job");
                    String date = jsonItem.getString("date");
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

                    PojoMail pojoMail = new PojoMail(Name, Title1, Title2, Time,date, Icon,job,id,age,gender,address,sem1Grade,sem2Grade,sem3Grade,sem4Grade,sem5Grade,sem6Grade,img);
                    listmail.add(pojoMail);
                }
            }
        } catch (JSONException e) {
            throw new RuntimeException(e);
        }

        if (!listmail.isEmpty()) {
            listmail.sort(new CustomComparator());
            setUpList(listmail);
        }
    }
    private void setUpList(ArrayList<PojoMail> listmail) {

        AdapterList listAdapter = new AdapterList(listmail, new AdapterList.OnItemClickListener() {

            @Override
            public void onItemClick(PojoMail item) {
                Intent intent = new Intent(getApplicationContext(), ActivityProfile.class);
                intent.putExtra("PojoMail", item);
                startActivity(intent);
            }
        });
        LinearLayoutManager linearLayoutManager = new LinearLayoutManager(ActivityMain.this);
        linearLayoutManager.setOrientation(LinearLayoutManager.VERTICAL);
        binding.rvList.setLayoutManager(linearLayoutManager);
        binding.rvList.setAdapter(listAdapter);

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
    public static class CustomComparator implements Comparator<PojoMail> {
        @Override
        public int compare(PojoMail o1, PojoMail o2) {
            String name1 = o1.getName();
            String name2 = o2.getName();
            return name1.compareTo(name2);
        }
    }
}
