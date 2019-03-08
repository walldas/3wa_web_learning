#-----------10------
SELECT 
	customers.customerNumber,
    customers.customerName,
	customers.customerNumber,
    customers.country,
    sum(payments.amount) as totalPayment
FROM customers

INNER JOIN payments ON payments.customerNumber=customers.customerNumber 
WHERE country in ("France",'Germany', 'USA')
GROUP by customers.customerNumber, customerName ,country
HAVING totalPayment>50000
order by totalPayment DESC




#------9--
SELECT 
	orderNumber, 
    orderdetails.productCode, 
    productName, 
    productLine,
    (MSRP - priceEach) as Discount
FROM orderdetails
INNER JOIN products ON orderdetails.productCode = products.productCode
where productLine IN('Classic Cars', 'Vintage Cars', 'Motorcycles')
ORDER BY orderNumber,Discount DESC
#------8--
SELECT 
	customerName, 
    contactLastName, 
    contactFirstName, 
    country, 
    lastName, 
    firstName
FROM customers
INNER JOIN employees ON customers.salesRepEmployeeNumber =employees.employeeNumber
where customers.country IN("USA","France")
ORDER BY contactLastName, contactFirstName

#------6.1 ir 6.2------------
SELECT customerNumber,paymentDate,SUM(amount)as totalCredit
FROM payments
WHERE paymentDate BETWEEN" 2004-01-01" and "2004-12-31" 
GROUP BY customerNumber
HAVING totalCredit> 20000
ORDER BY totalCredit DESC

;#------6------------
SELECT customerNumber,SUM(amount)as totalCredit
FROM payments
GROUP BY customerNumber
;#------5------------
SELECT productName,productLine, MIN(buyPrice) as cheapestPricePlane
FROM products
WHERE productLine="Planes"
GROUP BY productLine

;#------4------------
SELECT productVendor,
MAX(quantityInStock) as maxInStock
FROM products
GROUP BY productVendor
;#------3.2------------
SELECT 
	productLine,
	SUM(quantityInStock) as totalStock,
	SUM(quantityInStock * MSRP) as totalStockValue
FROM products
WHERE MSRP>100
GROUP by productLine
ORDER BY totalStockValue DESC
LIMIT 3
;#------3.1------------

SELECT 
	SUM(quantityInStock) as totalStock,
	SUM(quantityInStock * MSRP) as totalStockValue
FROM products
WHERE MSRP>100
GROUP by productLine


;#------3.0------------
SELECT 
	SUM(quantityInStock) as totalStock,
	SUM(quantityInStock * MSRP) as totalStockValue
    
FROM products
GROUP by productLine

;#---2-----------------------------
SELECT productLine , COUNT(productLine)
FROM products
GROUP BY productLine

;#--1------------------------------
SELECT productVendor,round(AVG(MSRP),2) as average
FROM products
GROUP BY productVendor
ORDER by average DESC;


#----------------0--------------
SELECT
FROM
JOIN   bukle su kuria jungia   ON salyga
WHERE
GROUP BY
HAVING
ORDER BY
LIMIT 3,2