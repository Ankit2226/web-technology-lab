from lxml import etree


xml_data = """  
<employees>
    <employee id="101">
        <name>Ankit Bhosale</name>
        <position>Software Engineer</position>
        <department>IT</department>
        <salary>80000</salary>
    </employee>
    <employee id="102">
        <name>Vikrant Kamble</name>
        <position>Project Manager</position>
        <department>Management</department>
        <salary>95000</salary>
    </employee>
    <employee id="103">
        <name>Rohit Kamble</name>
        <position>Project Manager</position>
        <department>Management</department>
        <salary>9500</salary>
    </employee>
    <employee id="104">
        <name>John Kamble</name>
        <position>Project Manager</position>
        <department>Management</department>
        <salary>95500</salary>
    </employee>
</employees>
"""

# Parse the XML
tree = etree.XML(xml_data.encode())


employee_names = tree.xpath("//employee/name/text()")
print("All Employees:", employee_names)

# 2️⃣ Find employee with ID 101
employee_101 = tree.xpath("//employee[@id='101']/name/text()")
print("Employee with ID 101:", employee_101)

# 3️⃣ Get all employees in Management Department
management_employees = tree.xpath("//employee[department='Management']/name/text()")
print("Management Employees:", management_employees)

# 4️⃣ Get employees with salary above 90000
high_salary_employees = tree.xpath("//employee[salary > 90000]/name/text()")
print("Employees with salary > 90000:", high_salary_employees)

# 5️⃣ Find employees with 'Kamble' in their name
kamble_employees = tree.xpath("//employee[contains(name, 'Kamble')]/name/text()")
print("Employees with 'Kamble' in Name:", kamble_employees)
