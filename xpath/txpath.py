from lxml import etree
with open("employees.xml", "r", encoding="utf-8") as file:
    xml_data = file.read()
root = etree.XML(xml_data.encode())
print(root.tag)
tree = etree.XML(xml_data.encode())


employee_names = tree.xpath("//employee/name/text()")
print("All Employees:", employee_names)


employee_101 = tree.xpath("//employee[@id='101']/name/text()")
print("Employee with ID 101:", employee_101)


management_employees = tree.xpath("//employee[department='Management']/name/text()")
print("Management Employees:", management_employees)


high_salary_employees = tree.xpath("//employee[salary > 90000]/name/text()")
print("Employees with salary > 90000:", high_salary_employees)


kamble_employees = tree.xpath("//employee[contains(name, 'Kamble')]/name/text()")
print("Employees with 'Kamble' in Name:", kamble_employees)
