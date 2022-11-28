<?php
$host='localhost';
$user='root';
$pw='123456';
$dbname='codingtest';
$conn=mysqli_connect($host,$user,$pw,$dbname);

$sql="select e.emp_no,e.first_name,e.last_name,e.gender,e.hire_date,d.dept_name,
t.title,max(salary) from employees e, dept_emp de, departments d, salaries s,titles t
where e.emp_no=de.emp_no AND de.dept_no=d.dept_no AND e.emp_no=s.emp_no AND
e.emp_no=t.emp_no AND e.hire_date>=19900101 group by e.emp_no";
$result=mysqli_query($conn,$sql);
?> 
    <table>
      <tr>
        <td>emp_no</td><td>first_name</td><td>last_name</td><td>gender</td><td>hire_date</td><td></td>dept_name<td>title</td><td>salary</td>
      </tr><tr>
<?php
 while($fetch=mysqli_fetch_array($result)){

}
?>
</tr>
</table>