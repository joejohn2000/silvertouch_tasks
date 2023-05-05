package com.demo.logindemoapp.view.activity;




import static com.demo.logindemoapp.BR.profile;
import static android.content.ContentValues.TAG;


import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;
import androidx.databinding.DataBindingUtil;
import androidx.lifecycle.ViewModelProvider;
import androidx.recyclerview.widget.GridLayoutManager;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.content.Intent;
import android.graphics.Color;
import android.os.Bundle;
import android.text.TextUtils;
import android.util.Log;
import android.view.MenuItem;
import android.widget.Toast;


import com.bumptech.glide.Glide;
import com.bumptech.glide.load.resource.bitmap.CircleCrop;
import com.bumptech.glide.load.resource.bitmap.RoundedCorners;
import com.bumptech.glide.request.RequestOptions;
import com.demo.logindemoapp.R;
import com.demo.logindemoapp.businesslogic.pojo.PojoDoc;
import com.demo.logindemoapp.businesslogic.pojo.PojoMail;
import com.demo.logindemoapp.businesslogic.viewmodel.activity.ViewModelPhotos;
import com.demo.logindemoapp.businesslogic.viewmodel.activity.ViewModelProfile;
import com.demo.logindemoapp.databinding.ActivityProfileBinding;
import com.demo.logindemoapp.view.adapter.AdapterHorizontal;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.IOException;
import java.io.InputStream;
import java.nio.charset.StandardCharsets;
import java.util.ArrayList;
import java.util.Collections;

public class ActivityProfile extends AppCompatActivity {

    private ActivityProfileBinding binding;
    private ArrayList<PojoDoc> listDoc = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        binding = ActivityProfileBinding.inflate(getLayoutInflater());
        setContentView(binding.getRoot());

        getSupportActionBar().setDisplayHomeAsUpEnabled(true);

        PojoMail pojoMail = (PojoMail) getIntent().getSerializableExtra("PojoMail");
        if (pojoMail != null) {
            binding.setProfile(pojoMail);

            Glide.with(this)
                    .load(pojoMail.getImg())

                    .apply(RequestOptions.bitmapTransform(new RoundedCorners(140)))

                    .placeholder(R.drawable.img1)
                    .into(binding.profileCard);
        }


        setUpList();
    }

    private void setUpList() {
        try {
            JSONObject jsonObject = new JSONObject(loadJSONFromAsset());
            JSONArray array = jsonObject.getJSONArray("Mail");
            for (int i = 0; i < array.length(); i++) {
                JSONObject jsonItem = array.getJSONObject(i);
                if (jsonItem != null && jsonItem.has("document")) {
                    JSONArray docs = jsonItem.getJSONArray("document");
                    for (int j = 0; j < docs.length(); j++) {
                        JSONObject jsondoc = docs.getJSONObject(j);
                        if (jsondoc != null && jsondoc.has("type") && jsondoc.has("doc")) {
                            String type = jsondoc.getString("type");
                            String document = jsondoc.getString("doc");
                            int doc = R.drawable.doc1;
                            if (TextUtils.equals(document, "doc1")) {
                                doc = R.drawable.doc1;
                            }
                            if (TextUtils.equals(document, "doc2")) {
                                doc = R.drawable.doc2;
                            }
                            if (TextUtils.equals(document, "doc3")) {
                                doc = R.drawable.doc3;
                            }
                            PojoDoc pojoDoc = new PojoDoc(doc, type);
                            listDoc.add(pojoDoc);
                        }
                    }
                }
            }

            if (!listDoc.isEmpty()) {
                AdapterHorizontal adapter = new AdapterHorizontal(listDoc);
                binding.recyclerView.setLayoutManager(new LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false));
                binding.recyclerView.setAdapter(adapter);
            }
        } catch (JSONException e) {
            e.printStackTrace();
        }
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
        }
        return json;
    }

    @Override
    public boolean onOptionsItemSelected(@NonNull MenuItem item) {
        if (item.getItemId() == android.R.id.home) {
            onBackPressed();
            return true;
        }
        return super.onOptionsItemSelected(item);
    }
}
