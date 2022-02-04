# Server Side Programming

1.  Do clone or download the code repository in your system
2.  Create a database called: wiz
3.  create table called employee:

```
    CREATE TABLE `employee` (
    `empid` int(20) NOT NULL AUTO_INCREMENT,
    `empname` varchar(40) NOT NULL,
    `empemail` varchar(40) NOT NULL,
    `empsal` double(10,4) NOT NULL,
    PRIMARY KEY (`empid`)
    );
```

4.  enter localhost in browser (make sure your wamp/xamp server in local is running).
5.  Possible errors will be database name, table name.
