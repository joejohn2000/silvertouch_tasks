package com.demo.logindemoapp.view.adapter;

import android.view.LayoutInflater;
import android.view.ViewGroup;

import androidx.annotation.NonNull;
import androidx.databinding.DataBindingUtil;
import androidx.recyclerview.widget.RecyclerView;

import com.bumptech.glide.Glide;
import com.bumptech.glide.load.resource.bitmap.CircleCrop;
import com.demo.logindemoapp.R;
import com.demo.logindemoapp.businesslogic.pojo.PojoMail;
import com.demo.logindemoapp.databinding.LayoutItemListBinding;
import com.demo.logindemoapp.view.activity.ActivityMain;
import com.demo.logindemoapp.view.activity.ActivityProfile;

import java.util.ArrayList;
import java.util.Locale;

public class AdapterList extends RecyclerView.Adapter<AdapterList.ViewHolder> {
    private final ArrayList<PojoMail> listmail;

    private final OnItemClickListener onItemClickListener;



    public AdapterList(ArrayList<PojoMail> listmail, OnItemClickListener onItemClickListener) {
        this.listmail = listmail;

        this.onItemClickListener = onItemClickListener;

    }

    @NonNull
    @Override
    public ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        LayoutItemListBinding binding = DataBindingUtil.inflate(LayoutInflater.from(parent.getContext()), R.layout.layout_item_list, parent, false);


        ViewHolder viewHolder = new ViewHolder(binding);

        // Set click listener on the root view of the item
        binding.getRoot().setOnClickListener(view -> {
            int position = viewHolder.getAdapterPosition();
            if (position != RecyclerView.NO_POSITION && onItemClickListener != null) {



                onItemClickListener.onItemClick(listmail.get(position));




            }
        });


        return viewHolder;
    }

    @Override
    public void onBindViewHolder(@NonNull ViewHolder holder, int position) {
        holder.bindData(listmail.get(position), position);
    }

    @Override
    public int getItemCount() {
        return listmail.size();
    }



    static class ViewHolder extends RecyclerView.ViewHolder {
        LayoutItemListBinding binding;


        ViewHolder(LayoutItemListBinding binding) {
            super(binding.getRoot());
            this.binding = binding;

        }

        void bindData(PojoMail pojoMail, int position) {
            binding.setPojo(pojoMail);
            binding.setCurrentPositionto(position);
            Glide.with(itemView.getContext())
                    .load(pojoMail.getImg())
                    .transform(new CircleCrop())

                    .placeholder(R.drawable.img1)
                    .into(binding.icon);
            binding.executePendingBindings();
        }
    }

    public interface OnItemClickListener {
        void onItemClick(PojoMail pojoMail);
    }
}
