package com.demo.logindemoapp.view.adapter;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import androidx.annotation.NonNull;
import androidx.databinding.DataBindingUtil;
import androidx.recyclerview.widget.RecyclerView;

import com.bumptech.glide.Glide;
import com.bumptech.glide.load.resource.bitmap.CircleCrop;
import com.demo.logindemoapp.R;
import com.demo.logindemoapp.businesslogic.pojo.PojoDoc;
import com.demo.logindemoapp.businesslogic.pojo.PojoMail;
import com.demo.logindemoapp.databinding.LayoutDocumentsListBinding;
import com.demo.logindemoapp.databinding.LayoutImageListBinding;
import com.demo.logindemoapp.databinding.LayoutItemListBinding;

import java.util.ArrayList;

public class AdapterHorizontal extends RecyclerView.Adapter<AdapterHorizontal.ViewHolderList> {

    private final ArrayList<PojoDoc> listMail;

    public AdapterHorizontal(ArrayList<PojoDoc> listNewMail) {
        this.listMail = listNewMail;
    }

    @NonNull
    @Override
    public ViewHolderList onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        LayoutDocumentsListBinding binding = DataBindingUtil.inflate(LayoutInflater.from(parent.getContext()), R.layout.layout_documents_list, parent, false);
        ViewHolderList viewHolderList = new ViewHolderList(binding);
        return viewHolderList;
    }

    @Override
    public void onBindViewHolder(@NonNull ViewHolderList holder, int position) {
        holder.bindData(listMail.get(position), position);
    }

    @Override
    public int getItemCount() {
        return listMail.size();
    }

    static class ViewHolderList extends RecyclerView.ViewHolder {
        LayoutDocumentsListBinding bind;

        ViewHolderList(LayoutDocumentsListBinding bind) {
            super(bind.getRoot());
            this.bind = bind;
        }

        void bindData(PojoDoc pojoDoc, int position) {
            bind.setPojo(pojoDoc);
            Glide.with(bind.getRoot().getContext())
                    .load(pojoDoc.getDoc())
                    .placeholder(R.drawable.doc1)
                    .into(bind.image1);
            bind.setCurrentPositionto(position);
            bind.executePendingBindings();
        }
    }
}
