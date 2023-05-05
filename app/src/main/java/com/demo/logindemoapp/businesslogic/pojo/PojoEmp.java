package com.demo.logindemoapp.businesslogic.pojo;

public class PojoEmp {
    private final String empId;
    private final String firstName;
    private final String lastName;
    private final String jobTitleName;
    private final String employeeCode;
    private final String emailAddress;
    private final String phoneNumber;
    private final String region;

    public PojoEmp(String empId, String firstName, String lastName, String jobTitleName, String employeeCode, String phoneNumber, String emailAddress, String region) {
        this.empId = empId;
        this.firstName = firstName;
        this.lastName = lastName;
        this.jobTitleName = jobTitleName;
        this.employeeCode = employeeCode;
        this.phoneNumber = phoneNumber;
        this.emailAddress = emailAddress;
        this.region = region;
    }

    public String getEmpId() {
        return empId;
    }

    public String getFirstName() {
        return firstName;
    }

    public String getLastName() {
        return lastName;
    }

    public String getJobTitleName() {
        return jobTitleName;
    }

    public String getEmployeeCode() {
        return employeeCode;
    }

    public String getPhoneNumber() {
        return phoneNumber;
    }

    public String getEmailAddress() {
        return emailAddress;
    }

    public String getRegion() {
        return region;
    }
}
