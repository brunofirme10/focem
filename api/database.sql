CREATE TABLE registers (
    id INT PRIMARY KEY AUTO_INCREMENT, -- FOR SQLSERVE USE CHANGE ->  AUTO_INCREMENT to IDENTITY(1 NOT NULL,1)
    user_name VARCHAR(255) NOT NULL,
    user_email VARCHAR(255) NOT NULL,
    user_phone VARCHAR(255) NOT NULL,
    user_cpf VARCHAR(15) NOT NULL,
    user_birthday VARCHAR(255) NOT NULL,
    company_name VARCHAR(255) NOT NULL,
    company_address VARCHAR(255) NOT NULL,
    company_cnpj VARCHAR(30) NOT NULL,
    company_cep VARCHAR(20) NOT NULL,
    company_cnae VARCHAR(50) NOT NULL,
    company_site VARCHAR(255) NOT NULL,
    company_annual_billing VARCHAR(255) NOT NULL,
    company_info_products_to_sell TEXT NOT NULL,
    company_info_certifications TEXT NOT NULL,
    company_info_clients TEXT NOT NULL,
    company_info_machinery TEXT NOT NULL,
    bank_name VARCHAR(255) NOT NULL,
    bank_agency VARCHAR(10) NOT NULL,
    bank_account VARCHAR(10) NOT NULL,
    dates_go DATETIME NOT NULL,
    dates_back DATETIME NOT NULL
);