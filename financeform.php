<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Finance Application Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="financeform.css">
</head>

<body>
    <div class="container my-4 d-flex justify-content-center">
        <div class="card shadow mb-4 mx-auto w-100">
            <div class="card-body">
                <h6 class="card-title">Company Name</h6>
                <h4 class="card-subtitle mb-3">Individual Application for Finance</h4>
                <form action="send_email.php" method="POST" class="needs-validation" novalidate>
                    <!-- Wish List -->
                    <div class="card mb-3 border-0">
                        <h4 class="card-header">Wish List</h4>
                        <div class="card-body row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Vehicle Interested in?</label>
                                <input type="text" class="form-control" name="Vehicle_Interested"
                                    id="vehicle_interested" required>
                                <div class="invalid-feedback">Please enter the vehicle you are interested in.</div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Instalment Budget</label>
                                <input type="number" class="form-control" name="Instalment_Budget"
                                    id="instalment_budget" min="3" required>
                                <div class="invalid-feedback">Please enter a valid budget.</div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Residual / Balloon?</label>
                                <input type="text" class="form-control" name="Residual_Balloon" id="residual_balloon"
                                    required>
                                <div class="invalid-feedback">Please enter residual/balloon value.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Applicant Type -->
                    <div class="card mb-3 border-0">
                        <h4 class="card-header">Applicant Type</h4>
                        <div class="card-body row g-3">
                            <div class="col-md-4">
                                <label class="form-label">ID/Passport No:</label>
                                <input type="number" class="form-control" name="ID_Passport" id="id_passport"
                                    pattern="\d{6,}" required>
                                <div class="invalid-feedback">Please enter a valid ID/Passport number.</div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Country of Residence</label>
                                <input type="text" class="form-control mb-2" name="Country_Residence"
                                    id="country_residence" required>
                                <div class="invalid-feedback">Please enter your country of residence.</div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Permit Type</label>
                                <input type="text" class="form-control" name="Permit_Type" id="permit_type" required>
                                <div class="invalid-feedback">Please enter your permit type.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Language Prefer:</label>
                                <div>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check me-1">
                                            <input class="form-check-input" type="radio" name="Language" id="English"
                                                value="English" required>
                                            <label class="form-check-label">English</label>
                                        </div>
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="Language" id="Afrikaans"
                                                value="Afrikaans">
                                            <label class="form-check-label">Afrikaans</label>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="form-check me-2 mb-0">
                                                <input class="form-check-input" type="radio" name="Language" id="Other"
                                                    value="Other">
                                                <label class="form-check-label" for="Other">Other</label>
                                            </div>
                                            <input type="text" class="form-control form-control-sm"
                                                name="Language_other" id="language_other" disabled>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">Please select your preferred language.</div>
                                </div>
                            </div>
                            <div class="col-md-5 ml-6">
                                <label class="form-label">Ethnic Group:</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Ethnic_Group" value="A"
                                            required>
                                        <label class="form-check-label">A</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Ethnic_Group" value="B"
                                            required>
                                        <label class="form-check-label">B</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Ethnic_Group" value="C"
                                            required>
                                        <label class="form-check-label">C</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Ethnic_Group" value="W"
                                            required>
                                        <label class="form-check-label">W</label>
                                    </div>
                                </div>
                                <div class="invalid-feedback">Please select your ethnic group.</div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Citizenship:</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Citizenship" value="SA"
                                            required>
                                        <label class="form-check-label">SA</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Citizenship" value="Other"
                                            id="Other_citizenship" required>
                                        <label class="form-check-label">Other (if not SA resident, state country of
                                            Residence)</label>
                                    </div>
                                </div>
                                <div class="invalid-feedback">Please select your citizenship.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Applicant's Details -->
                    <div class="card mb-3 border-0">
                        <h4 class="card-header border-0">Applicant’s Details</h4>
                        <div class="card-body row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Surname:</label>
                                <input type="text" class="form-control" name="Applicant_Surname" id="surname" required>
                                <div class="invalid-feedback">Please enter your surname.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Full Name/s:</label>
                                <input type="text" class="form-control" name="Applicant_Full_Name" id="full_name"
                                    required>
                                <div class="invalid-feedback">Please enter your full name.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Gender:</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Applicant_Gender" value="M"
                                            required>
                                        <label class="form-check-label">M</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Applicant_Gender" value="F"
                                            required>
                                        <label class="form-check-label">F</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Graduate?</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Applicant_Graduate"
                                            value="Yes" required>
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Applicant_Graduate"
                                            value="No" required>
                                        <label class="form-check-label">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Home Tel No:</label>
                                <input type="number" class="form-control" name="Applicant_Home_Tel" id="home_tel"
                                    required>
                                <div class="invalid-feedback">Please enter a valid home telephone number.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Cell No:</label>
                                <input type="number" class="form-control" name="Applicant_Cell_No" id="cell_no"
                                    required>
                                <div class="invalid-feedback">Please enter a valid cell number.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">E-mail Address:</label>
                                <input type="email" class="form-control" name="Applicant_Email" id="email" required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Home Address:</label>
                                <input type="text" class="form-control" name="Applicant_Home_Address" id="home_address"
                                    required>
                                <div class="invalid-feedback">Please enter your home address.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Suburb:</label>
                                <input type="text" class="form-control" name="Applicant_Suburb" id="suburb" required>
                                <div class="invalid-feedback">Please enter your suburb.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Postal Code:</label>
                                <input type="number" class="form-control" name="Applicant_Postal_Code" id="postal_code"
                                    required>
                                <div class="invalid-feedback">Please enter a valid postal code.</div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Period at Address: Years</label>
                                <input type="number" class="form-control" name="Applicant_Address_Years"
                                    id="address_years" min="0" required>
                                <div class="invalid-feedback">Please enter the number of years at your address.</div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Months</label>
                                <input type="number" class="form-control" name="Applicant_Address_Months"
                                    id="address_months" min="0" required>
                                <div class="invalid-feedback">Please enter the number of months at your address.</div>
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <!-- Marital Status -->
                            <div class="col-md-4">
                                <label class="form-label fw-bold">Marital Details:</label>
                                <div class="d-flex gap-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Applicant_Marital" id="S"
                                            value="S" required>
                                        <label class="form-check-label">S</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Applicant_Marital" id="M"
                                            value="M" required>
                                        <label class="form-check-label">M</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Applicant_Marital" id="D"
                                            value="D" required>
                                        <label class="form-check-label">D</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Applicant_Marital" id="W"
                                            value="W" required>
                                        <label class="form-check-label">W</label>
                                    </div>
                                </div>
                                <div class="invalid-feedback">Please select your marital status.</div>
                            </div>

                            <!-- Date Married -->
                            <div class="col-md-4">
                                <label class="form-label">Date Married:</label>
                                <input type="date" class="form-control" name="Applicant_Date_Married" id="date_married"
                                    required>
                                <div class="invalid-feedback">Please select your date of marriage.</div>
                            </div>

                            <!-- Marriage Type -->
                            <div class="col-md-4 mt-4">
                                <div class="d-flex gap-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Marriage_Type" value="ANC"
                                            required>
                                        <label class="form-check-label">ANC</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Marriage_Type" value="COP"
                                            required>
                                        <label class="form-check-label">COP</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Marriage_Type" value="OTHER"
                                            required>
                                        <label class="form-check-label">OTHER</label>
                                    </div>
                                </div>
                                <div class="invalid-feedback">Please select your marriage type.</div>
                            </div>
                        </div>


                        <div class="card mb-3 row border-0">
                            <h4 class="card-header">Spouse's Details</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-label">Surname:</label>
                                        <input type="text" class="form-control" name="Spouse_Surname"
                                            id="spouse_surname" required>
                                        <div class="invalid-feedback">Please enter your spouse's surname.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Full Name/s:</label>
                                        <input type="text" class="form-control" name="Spouse_Full_Name"
                                            id="spouse_full_names" required>
                                        <div class="invalid-feedback">Please enter your spouse's full name.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Spouse’s ID No:</label>
                                        <input type="number" class="form-control" name="Spouse_ID_No" id="spouse_id"
                                            required>
                                        <div class="invalid-feedback">Please enter your spouse's ID number.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Property Details -->
                        <div class="card mb-3 border-0">
                            <h4 class="card-header">Property Details</h4>
                            <div class="card-body row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Do you Rent the Property?</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Rent_Property"
                                                value="Yes" required>
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Rent_Property" value="No"
                                                required>
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Do you own Property?</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Own_Property" value="Yes"
                                                required>
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Own_Property" value="No">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Bonded By which Bank:</label>
                                    <input type="text" class="form-control" name="Bonded_Bank" id="bonded_bank"
                                        required>
                                    <div class="invalid-feedback">Please enter the bank you are bonded by.</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">If Yes:</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Bonded_By" id="your_name"
                                                value="Name" required>
                                            <label class="form-check-label">Your Name</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Bonded_By"
                                                id="your_spouse" value="Spouse" required>
                                            <label class="form-check-label">Your Spouse</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Bonded_By" id="Both"
                                                value="Both" required>
                                            <label class="form-check-label">Both</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Employment Details -->
                    <div class="card mb-3 border-0">
                        <h4 class="card-header">Employment Details</h4>
                        <div class="card-body row g-3">
                            <div class="col-md-6">
                                <label class="form-label">If Self Employed, Nature of Business:</label>
                                <input type="text" class="form-control" name="Nature_Business" id="nature_business"
                                    required>
                                <div class="invalid-feedback">Please enter the nature of your business.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Company Name:</label>
                                <input type="text" class="form-control" name="Company_Name" id="company_name" required>
                                <div class="invalid-feedback">Please enter your company name.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Company Address:</label>
                                <input type="text" class="form-control" name="Company_Address" id="company_address"
                                    required>
                                <div class="invalid-feedback">Please enter your company address.</div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Suburb:</label>
                                <input type="text" class="form-control" name="Company_Suburb" id="company_suburb"
                                    required>
                                <div class="invalid-feedback">Please enter the suburb of your company.</div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Postal Code:</label>
                                <input type="number" class="form-control" name="Company_Postal_Code"
                                    id="company_postal_code" required>
                                <div class="invalid-feedback">Please enter a valid postal code for your company.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Landline Number:</label>
                                <input type="number" class="form-control" name="Landline" id="landline" required>
                                <div class="invalid-feedback">Please enter a valid landline number.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">HR No:</label>
                                <input type="number" class="form-control" name="HR_No" id="hr_no" required>
                                <div class="invalid-feedback">Please enter a valid HR number.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Occupation:</label>
                                <input type="text" class="form-control" name="Occupation" id="occupation" required>
                                <div class="invalid-feedback">Please enter your occupation.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Industry:</label>
                                <input type="text" class="form-control" name="Industry" id="industry" required>
                                <div class="invalid-feedback">Please enter your industry.</div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Period at Employer: Years</label>
                                <input type="number" class="form-control" name="Period_Employer_Years"
                                    id="period_employer_years" min="0" required>
                                <div class="invalid-feedback">Please enter the number of years at your employer.</div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Months</label>
                                <input type="number" class="form-control" name="Employer_Months" id="employer_months"
                                    min="0" required>
                                <div class="invalid-feedback">Please enter the number of months at your employer.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Salary Date:</label>
                                <input type="date" class="form-control" name="Salary_Date" id="salary_date" required>
                                <div class="invalid-feedback">Please select your salary date.</div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Retrenchment Notice in last 6 months?</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Retrenchment" value="Yes"
                                            required>
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Retrenchment" value="No"
                                            required>
                                        <label class="form-check-label">No</label>
                                    </div>
                                </div>
                                <div class="invalid-feedback">Please select if you have received a retrenchment notice.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Applicant's Income Details -->
                    <div class="card mb-3 border-0">
                        <h4 class="card-header">Applicant's Income Details</h4>
                        <div class="card-body row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Gross Remuneration (Before deductions) R</label>
                                <input type="number" class="form-control" name="Gross_Remuneration"
                                    id="gross_remuneration" required>
                                <div class="invalid-feedback">Please enter your gross remuneration.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Monthly Commission (Included in Gross Salary) R</label>
                                <input type="number" class="form-control" name="Monthly_Commission"
                                    id="monthly_commission" required>
                                <div class="invalid-feedback">Please enter your monthly commission.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Car Allowance (Included in Gross Salary) R</label>
                                <input type="number" class="form-control" name="Car_Allowance" id="car_allowance"
                                    required>
                                <div class="invalid-feedback">Please enter your car allowance.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Net Take-home Pay (After Payslip Deductions) R</label>
                                <input type="number" class="form-control" name="Net_Take_Home" id="net_take_home"
                                    required>
                                <div class="invalid-feedback">Please enter your net take-home pay.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Income other than Salary R</label>
                                <input type="number" class="form-control" name="Other_Income" id="other_income"
                                    required>
                                <div class="invalid-feedback">Please enter other income details.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Source of Other Income:</label>
                                <input type="text" class="form-control" name="Source_Other_Income"
                                    id="source_other_income" required>
                                <div class="invalid-feedback">Please enter the source of other income.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Total Monthly Income R</label>
                                <input type="number" class="form-control" name="Total_Monthly_Income"
                                    id="total_monthly_income" required>
                                <div class="invalid-feedback">Please enter your total monthly income.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Applicant's Expenses per month -->
                    <div class="card mb-3 border-0">
                        <h4 class="card-header">Applicant's Expenses per month</h4>
                        <div class="card-body row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Personal Loan Repayments R</label>
                                <input type="number" class="form-control" name="Personal_Loan_Repayments"
                                    id="personal_loan" required>
                                <div class="invalid-feedback">Please enter your personal loan repayments.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Vehicle Instalments (excl those to be settled) R</label>
                                <input type="number" class="form-control" name="Vehicle_Instalments"
                                    id="vehicle_instalments" required>
                                <div class="invalid-feedback">Please enter your vehicle instalments.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">If Settling your Vehicle, Can we draw a Settlement
                                    Letter?</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Settlement_Letter"
                                            value="Yes" required>
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Settlement_Letter" value="No"
                                            required>
                                        <label class="form-check-label">No</label>
                                    </div>
                                </div>
                                <div class="invalid-feedback">Please select if we can draw a settlement letter.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Policy/ Insurance Repayments R</label>
                                <input type="text" class="form-control" name="Policy_Insurance_Repayments"
                                    id="policy_insurance" required>
                                <div class="invalid-feedback">Please enter your policy/insurance repayments.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Rates, Water and Electricity R</label>
                                <input type="number" class="form-control" name="Rates_Water_Electricity"
                                    id="rates_water_electricity" required>
                                <div class="invalid-feedback">Please enter your rates, water, and electricity expenses.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Bond Payment / Rent R</label>
                                <input type="number" class="form-control" name="Bond_Payment" id="bond_payment"
                                    required>
                                <div class="invalid-feedback">Please enter your bond payment or rent.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Credit Card Repayments R</label>
                                <input type="number" class="form-control" name="Credit_Card_Repayments" id="credit_card"
                                    required>
                                <div class="invalid-feedback">Please enter your credit card repayments.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Furniture Accounts R</label>
                                <input type="number" class="form-control" name="Furniture_Accounts"
                                    id="furniture_accounts" required>
                                <div class="invalid-feedback">Please enter your furniture account repayments.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Clothing Accounts R</label>
                                <input type="number" class="form-control" name="Clothing_Accounts"
                                    id="clothing_accounts" required>
                                <div class="invalid-feedback">Please enter your clothing account repayments.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Overdraft Repayments R</label>
                                <input type="text" class="form-control" name="Overdraft_Repayments" id="overdraft"
                                    required>
                                <div class="invalid-feedback">Please enter your overdraft repayments.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Telephone Payment R</label>
                                <input type="number" class="form-control" name="Telephone_Payments" id="telephone"
                                    required>
                                <div class="invalid-feedback">Please enter your telephone payment.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Transport Costs R</label>
                                <input type="number" class="form-control" name="Transport_Costs" id="transport"
                                    required>
                                <div class="invalid-feedback">Please enter your transport costs.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Food and Entertainment R</label>
                                <input type="number" class="form-control" name="Food_and_Entertainment"
                                    id="food_entertainment" required>
                                <div class="invalid-feedback">Please enter your food and entertainment expenses.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Education Costs R</label>
                                <input type="number" class="form-control" name="Education_Costs" id="education"
                                    required>
                                <div class="invalid-feedback">Please enter your education costs.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Spousal / Child Support R</label>
                                <input type="number" class="form-control" name="Spousal_Child_Support"
                                    id="spousal_child_support" required>
                                <div class="invalid-feedback">Please enter your spousal or child support payments.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Household Expenses R</label>
                                <input type="number" class="form-control" name="Household_Expenses"
                                    id="household_expenses" required>
                                <div class="invalid-feedback">Please enter your household expenses.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Other R</label>
                                <input type="number" class="form-control" name="Other_Expenses" id="other_expenses"
                                    required>
                                <div class="invalid-feedback">Please enter any other expenses.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Total Monthly Expenses R</label>
                                <input type="number" class="form-control" name="Total_Monthly_Expenses"
                                    id="total_monthly_expenses" required>
                                <div class="invalid-feedback">Please enter your total monthly expenses.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Banking Details -->
                    <div class="card mb-3 border-0">
                        <h4 class="card-header">Banking Details</h4>
                        <div class="card-body row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Account Holder:</label>
                                <input type="text" class="form-control" name="Account_Holder" id="account_holder"
                                    required>
                                <div class="invalid-feedback">Please enter the account holder's name.</div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Bank Name:</label>
                                <input type="text" class="form-control" name="Bank_Name" id="bank_name" required>
                                <div class="invalid-feedback">Please enter the bank name.</div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Branch Code:</label>
                                <input type="number" class="form-control" name="Branch_Code" id="branch_code" required>
                                <div class="invalid-feedback">Please enter a valid branch code.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Account No:</label>
                                <input type="number" class="form-control" name="Account_No" id="account_no" required>
                                <div class="invalid-feedback">Please enter a valid account number.</div>
                            </div>
                            <div class="row g-2 align-items-center mb-3">
                                <label class="form-label col-12 col-md-auto mb-0 me-md-3">Account Type:</label>
                                <div class="col-12 col-md-auto">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Account_Type" id="Cheque"
                                            value="Cheque" required>
                                        <label class="form-check-label" for="Cheque">Cheque</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Account_Type" id="Savings"
                                            value="Savings">
                                        <label class="form-check-label" for="Savings">Savings</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-auto d-flex align-items-center">
                                    <div class="form-check me-2 mb-0">
                                        <input class="form-check-input" type="radio" name="Account_Type"
                                            id="Account_Type_Other_Radio" value="Other">
                                        <label class="form-check-label" for="Account_Type_Other_Radio">Other</label>
                                    </div>
                                    <input type="text" class="form-control form-control-sm" style="width: 150px;"
                                        name="Account_Type_Other" id="account_type_other" disabled>
                                </div>
                                <div class="col-12">
                                    <div class="invalid-feedback">Please select your account type.</div>
                                </div>
                            </div>
                        </div>

                        <!-- Relative’s Details -->
                        <div class="card mb-3 border-0">
                            <h4 class="card-header">Relative’s Details (Relative in SA NOT living with you)</h4>
                            <div class="card-body row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Surname:</label>
                                    <input type="text" class="form-control" name="Relative_Surname"
                                        id="relative_surname" required>
                                    <div class="invalid-feedback">Please enter your relative's surname.</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Full Name/s:</label>
                                    <input type="text" class="form-control" name="Relative_Full_Names"
                                        id="relative_full_name" required>
                                    <div class="invalid-feedback">Please enter your relative's full name.</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Home Address:</label>
                                    <input type="text" class="form-control" name="Relative_Home_Address"
                                        id="relative_home_address" required>
                                    <div class="invalid-feedback">Please enter your relative's home address.</div>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Cell No:</label>
                                    <input type="number" class="form-control" name="Relative_Cell_No"
                                        id="relative_cell_no" required>
                                    <div class="invalid-feedback">Please enter a valid cell number for your relative.
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Relationship:</label>
                                    <input type="text" class="form-control" name="Relative_Relationship"
                                        id="relative_relationship" required>
                                    <div class="invalid-feedback">Please enter your relationship with the relative.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- IDX Consent -->
                        <div class="card mb-3 border-0">
                            <h4 class="card-header">IDX - CONSENT TO ELECTRONICALLY OBTAIN ACCOUNT STATEMENTS FORM
                                FINANCIAL INSTITUTION</h4>
                            <div class="card-body row g-3">
                                <div class="col-md-12">
                                    <p> For the purpose of assissing the finance application that the<b> Company
                                            Name
                                        </b>
                                        dealer will submit on you behalf to any or all of the Banks. The Banks need
                                        your
                                        consent to obtain your bank statement(s) directly from other financial
                                        institutions
                                        (as specified below). The Banks will exchange only the bank statements you
                                        have
                                        authorised and these will be safegaurded and not used for any other purpose
                                        other
                                        than the finance application for wich you have consented. Bank account
                                        statements
                                        obtained will also be limited to the period necessary to assess the finance
                                        application.</p>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Name of Bank</label>
                                    <input type="text" class="form-control" name="Consent_Bank_Name"
                                        id="consent_bank_name" required>
                                    <div class="invalid-feedback">Please enter the name of the bank.</div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Account Number</label>
                                    <input type="number" class="form-control" name="Consent_Account_Number"
                                        id="consent_account_number" required>
                                    <div class="invalid-feedback">Please enter a valid account number.</div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Account Type</label>
                                    <input type="text" class="form-control" name="Consent_Account_Type"
                                        id="consent_account_type" required>
                                    <div class="invalid-feedback">Please enter the account type.</div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Branch Number</label>
                                    <input type="number" class="form-control" name="Consent_Branch_Number"
                                        id="consent_branch_number" required>
                                    <div class="invalid-feedback">Please enter a valid branch number.</div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Branch Name</label>
                                    <input type="text" class="form-control" name="Consent_Branch_Name"
                                        id="consent_branch_name" required>
                                    <div class="invalid-feedback">Please enter the branch name.</div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Signature:</label>
                                    <!-- Signature Pad for consent signature -->
                                    <canvas id="consent-signature-pad" width="300" height="100"
                                        style="border:1px solid #ccc; background:#fff; max-width:100%;"></canvas>
                                    <input type="hidden" class="form-control" name="consent_signature"
                                        id="consent_signature" required>
                                    <div class="invalid-feedback">Please provide your consent signature.</div>
                                    <button type="button" class="btn btn-secondary btn-sm mt-2"
                                        id="clear-consent-signature">Clear</button>
                                </div>

                            </div>
                            <!-- Declarations -->
                            <div class="card mb-3 border-0">
                                <h4 class="card-header">Declarations</h4>
                                <div class="card-body">
                                    <div class="mb-2">
                                        <strong>I confirm that:</strong>
                                        <ul>
                                            <li>I am not a minor.</li>
                                            <li>I have never been declared mentally unfit by a court.</li>
                                            <li>I am not subject to an Administration Order.</li>
                                            <li>I do not have any current application pending for debt restructuring
                                                or
                                                alleviation.</li>
                                            <li>I do not have any current debt re-arrangement in existence.</li>
                                            <li>I have not previously applied for a debt re-arrangement.</li>
                                            <li>I am not under sequestration.</li>
                                            <li>I do not have applications pending for credit, nor open quotations
                                                as
                                                envisaged
                                                in section 92 of the National Credit Act.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-2">
                                        <label>If any of the above is incorrect, state which and give
                                            details:</label>
                                        <textarea class="form-control" name="Incorrect_Details"
                                            id="incorrect_details"></textarea>
                                    </div>
                                    <div class="mb-2">
                                        <label>I understand that I will be liable for a monthly service fee.</label>
                                    </div>
                                    <div class="mb-2">
                                        <label>I hereby consent to this Credit Provider making enquiries regarding
                                            my
                                            credit
                                            history with any credit bureau.</label>
                                    </div>
                                    <div class="mb-2">
                                        <label>I consent to this Credit Provider reporting the conclusion of any
                                            credit
                                            agreement with me to the National Loans Register in compliance with this
                                            Credit
                                            Provider’s obligation under the National Credit Act.</label>
                                    </div>
                                    <div class="mb-2">
                                        <label>I hereby declare that the information provided by me is true and
                                            correct.</label>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-12 col-md-6">
                                            <label class="form-label">Signature of Applicant:</label>
                                            <!-- Signature canvas for user to sign -->
                                            <canvas id="signature-pad" width="300" height="100"
                                                style="border:1px solid #ccc; background:#fff; max-width:100%;"></canvas>
                                            <!-- Hidden input to store signature data -->
                                            <input type="hidden" class="form-control" name="applicant_signature"
                                                id="applicant_signature" required>
                                            <div class="invalid-feedback">Please provide your signature.</div>
                                            <button type="button" class="btn btn-secondary btn-sm mt-2"
                                                id="clear-signature">Clear</button>
                                            <div class="invalid-feedback">Please draw your signature</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label">Date:</label>
                                            <input type="date" class="form-control" name="Signature_Date"
                                                id="signature_date" required>
                                            <div class="invalid-feedback">Please select the date of signing.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Show applicant signature image if present -->
                            <?php if (!empty($_POST['applicant_signature']) && strpos($_POST['applicant_signature'], 'data:image') === 0): ?>
                                <div class="mt-2">
                                    <img src="<?php echo htmlspecialchars($_POST['applicant_signature']); ?>"
                                        alt="Applicant Signature" style="max-width:200px; border:1px solid #ccc;" />
                                </div>
                            <?php endif; ?>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary" id="submitBtn">
                                    <span id="submitBtnText">Submit Application</span>
                                    <span id="submitBtnLoader" class="spinner-border spinner-border-sm d-none"
                                        role="status" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Signature Pad library -->
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.1.7/dist/signature_pad.umd.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            function $id(id) { return document.getElementById(id); }

            const otherLang = $id('Other');
            if (otherLang) otherLang.addEventListener('change', function () {
                const otherInput = $id('language_other'); if (!otherInput) return;
                if (this.checked) { otherInput.disabled = false; otherInput.required = true; } else { otherInput.disabled = true; otherInput.required = false; otherInput.value = ''; }
            });

            const acctOtherRadio = $id('Account_Type_Other_Radio');
            if (acctOtherRadio) acctOtherRadio.addEventListener('change', function () {
                const otherInput = $id('account_type_other'); if (!otherInput) return;
                if (this.checked) { otherInput.disabled = false; otherInput.required = true; } else { otherInput.disabled = true; otherInput.required = false; otherInput.value = ''; }
            });

            [$id('Cheque'), $id('Savings')].forEach(el => { if (!el) return; el.addEventListener('change', function () { const otherInput = $id('account_type_other'); if (!otherInput) return; otherInput.disabled = true; otherInput.required = false; otherInput.value = ''; }); });

            const canvas = $id('signature-pad');
            const consentCanvas = $id('consent-signature-pad');
            let signaturePad = null, consentSignaturePad = null;
            if (canvas) signaturePad = new SignaturePad(canvas);
            if (consentCanvas) consentSignaturePad = new SignaturePad(consentCanvas);

            const clearApplicantBtn = $id('clear-signature');
            if (clearApplicantBtn && signaturePad) clearApplicantBtn.addEventListener('click', function () { signaturePad.clear(); const input = $id('applicant_signature'); if (input) input.value = ''; const preview = $id('applicant-signature-preview'); if (preview) preview.src = ''; });
            const clearConsentBtn = $id('clear-consent-signature');
            if (clearConsentBtn && consentSignaturePad) clearConsentBtn.addEventListener('click', function () { consentSignaturePad.clear(); const input = $id('consent_signature'); if (input) input.value = ''; const preview = $id('consent-signature-preview'); if (preview) preview.src = ''; });

            function updateApplicantPreview() { const preview = $id('applicant-signature-preview'); const input = $id('applicant_signature'); if (!signaturePad || !input) return; if (!signaturePad.isEmpty()) { const data = signaturePad.toDataURL(); input.value = data; if (preview) preview.src = data; } else { input.value = ''; if (preview) preview.src = ''; } }
            function updateConsentPreview() { const preview = $id('consent-signature-preview'); const input = $id('consent_signature'); if (!consentSignaturePad || !input) return; if (!consentSignaturePad.isEmpty()) { const data = consentSignaturePad.toDataURL(); input.value = data; if (preview) preview.src = data; } else { input.value = ''; if (preview) preview.src = ''; } }

            if (signaturePad) ['mouseup', 'touchend'].forEach(ev => canvas.addEventListener(ev, updateApplicantPreview));
            if (consentSignaturePad) ['mouseup', 'touchend'].forEach(ev => consentCanvas.addEventListener(ev, updateConsentPreview));

            const form = document.querySelector('form');
            if (form) form.addEventListener('submit', function (event) {
                updateApplicantPreview(); updateConsentPreview();
                if (form.checkValidity() === false) { event.preventDefault(); event.stopPropagation(); form.classList.add('was-validated'); const firstInvalid = form.querySelector(':invalid'); if (firstInvalid) firstInvalid.focus(); return; }
                if (signaturePad && signaturePad.isEmpty()) { event.preventDefault(); event.stopPropagation(); alert('Please provide your applicant signature before submitting.'); return; }
                if (consentSignaturePad && consentSignaturePad.isEmpty()) { event.preventDefault(); event.stopPropagation(); alert('Please provide your consent signature before submitting.'); return; }
                const submitBtnText = $id('submitBtnText'); const submitBtnLoader = $id('submitBtnLoader'); if (submitBtnText) submitBtnText.classList.add('d-none'); if (submitBtnLoader) submitBtnLoader.classList.remove('d-none');
            });
        });
    </script>
</body>

</html>