package com.demo.logindemoapp.view.adapter;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;

import androidx.annotation.NonNull;
import androidx.databinding.DataBindingUtil;
import androidx.recyclerview.widget.RecyclerView;

import com.demo.logindemoapp.R;
import com.demo.logindemoapp.businesslogic.pojo.PojoMail;
import com.demo.logindemoapp.databinding.LayoutImageListBinding;
import com.demo.logindemoapp.view.activity.ActivityPhotos;

import java.util.ArrayList;

public class AdapterPhotos extends RecyclerView.Adapter<AdapterPhotos.ViewHolderList>{


    public static OnItemClickListener onItemClickListener;
    private final ArrayList<PojoMail> listMail;



    public AdapterPhotos(ArrayList<PojoMail> listNewMail,OnItemClickListener onItemClickListener) {
        this.listMail = listNewMail;

        this.onItemClickListener = onItemClickListener;
    }
    @NonNull
    @Override
    public ViewHolderList onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        LayoutImageListBinding binding = DataBindingUtil.inflate(LayoutInflater.from(parent.getContext()), R.layout.layout_image_list, parent,false);


        ViewHolderList ViewHolderList = new ViewHolderList(binding);

        // Set click listener on the root view of the item
        binding.getRoot().setOnClickListener(view -> {
            int position = ViewHolderList.getAdapterPosition();
            if (position != RecyclerView.NO_POSITION && onItemClickListener != null) {



                onItemClickListener.onItemClick(listMail.get(position));




            }
        });


        return ViewHolderList;
    }

    @Override
    public void onBindViewHolder(@NonNull ViewHolderList holder, int position) {
        holder.bindData(listMail.get(position), position);
    }

    @Override
    public int getItemCount() {
        return listMail.size();
    }



    static class ViewHolderList extends RecyclerView.ViewHolder{
        LayoutImageListBinding bind;


        ViewHolderList(LayoutImageListBinding bind){
            super(bind.getRoot());
            this.bind = bind;
        }

        void bindData(PojoMail pojoMail, int position){
            bind.setPojo(pojoMail);
            bind.image1.setImageResource(pojoMail.getImg());
            bind.setCurrentPositionto(position);
            bind.executePendingBindings();
        }
    }
    public interface OnItemClickListener {
        void onItemClick(PojoMail pojoMail);
    }
}
