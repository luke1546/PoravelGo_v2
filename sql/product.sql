create table product(
  num int not null auto_increment,
  model char(50) not null,
  size char(20),
  color char(20),
  material char(20),
  composition char(20),
  brand char(20) not null,
  manufacturer char(20) not null,
  madein char(20) not null,
  information char(200),
  primary key(num)
  )