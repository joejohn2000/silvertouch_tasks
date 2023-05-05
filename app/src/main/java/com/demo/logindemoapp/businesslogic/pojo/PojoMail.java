    package com.demo.logindemoapp.businesslogic.pojo;

    import androidx.databinding.ObservableBoolean;

    import java.io.Serializable;
    import java.util.Arrays;
    import java.util.List;

    public class PojoMail implements Serializable  {



        public final ObservableBoolean obserablebool = new ObservableBoolean();
        private final String Name;
        private final String date;
        private final String Title1;
        private final String Title2;
        private final String Time;
        private final String Icon;
        private final String id;
        private final String age;
        private final String address;
        private final String sem1Grade;
        private final String sem2Grade;
        private final String sem3Grade;
        private final String sem4Grade;
        private final String sem5Grade;
        private final String sem6Grade;

        private final String job;
        private final int img;
        private final String gender;



        public PojoMail(String Name, String Title1, String Title2, String Time, String date, String Icon, String job, String id, String age, String gender, String address, String sem1Grade, String sem2Grade, String sem3Grade, String sem4Grade, String sem5Grade, String sem6Grade, int img) {
            this.Name = Name;
            this.Title1 = Title1;
            this.Title2 = Title2;
            this.date=date;
            this.Time = Time;
            this.Icon = Icon;
            this.id = id;
            this.job=job;
            this.age = age;
            this.gender=gender;
            this.address = address;
            this.sem1Grade = sem1Grade;
            this.sem2Grade = sem2Grade;
            this.sem3Grade = sem3Grade;
            this.sem4Grade = sem4Grade;
            this.sem5Grade = sem5Grade;
            this.sem6Grade = sem6Grade;
            this.img = img;

        }




        public class ListMail {
            private List<PojoMail> mails;

            public ListMail(List<PojoMail> mails) {
                this.mails = mails;
            }

            public List<PojoMail> getMails() {
                return mails;
            }

            public void setMails(List<PojoMail> mails) {
                this.mails = mails;
            }
        }

        public String getName() {
            return Name;
        }

        public String getDate() {
            return date;
        }
        public String getGender(){return  gender;}

        public String getJob(){return  job;}
        public String getTitle1() {
            return Title1;
        }

        public String getTitle2() {
            return Title2;
        }

        public String getTime() {
            return Time;
        }

        public String getIcon(){ return Icon; }

        public String getId(){

            return id;}

        public String getAge() {

            return age;
        }

        public String getAddress() {

            return address;
        }

        public String getSem1Grade() {

            return sem1Grade;
        }

        public String getSem2Grade() {

            return sem2Grade;
        }

        public String getSem3Grade() {

            return sem3Grade;
        }

        public String getSem4Grade() {

            return sem4Grade;
        }

        public String getSem5Grade() {

            return sem5Grade;
        }

        public String getSem6Grade() {

            return sem6Grade;
        }
        public int getImg(){return img;}



    }
