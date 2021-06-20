DROP DATABASE IF EXISTS library_php;
CREATE DATABASE library_php CHARACTER SET 'utf8';
USE library_php;

CREATE TABLE User(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    lastname VARCHAR(20) NOT NULL,
    firstname VARCHAR(20) NOT NULL,
    birth_date DATE NOT NULL,
    city_code CHAR(5) NOT NULL,
    city VARCHAR(50) NOT NULL,
    adress VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    email VARCHAR(50) NOT NULL,
    library_number INT(5) NOT NULL,
    PRIMARY KEY (id)
)
ENGINE=InnoDB;

ALTER TABLE `User` ADD UNIQUE( `phone`, `email`, `library_number`); 
INSERT INTO User(lastname, firstname, birth_date, city_code, city, adress, phone, email, library_number)
VALUES
("장", "다은", "1993-03-09", "1218", "서울", "송파구 양재대로 ", "+821023345667", "jj@gmail.com", 99999),
("김", "태희", "1978-06-23", "1315", "서울", "마포구 홍대", "+821089980990", "bb@gmail.com", 99996),
("박", "다솜", "1991-10-02", "1200", "서울", "마포구 신촌동", "+821041145445", "jjj@gmail.com", 99997),
("호", "티보", "1989-02-10", "1210", "서울", "강남구 역삼동", "+821049915289", "tt@gmail.com", 99998);

CREATE TABLE Book(
    book_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    author VARCHAR(50) NOT NULL,
    summary TEXT(500) NOT NULL,
    publication_date DATE NOT NULL,
    category VARCHAR(20) NOT NULL,
    user_id INT UNSIGNED,
    PRIMARY KEY(book_id),
    FOREIGN KEY (user_id) REFERENCES User(id)
)
ENGINE=InnoDB;

INSERT INTO Book(title, author, summary, publication_date, category, user_id)
VALUES
("주린이도 술술 읽는 친절한 주식책", "최정희, 이슬기", "이보다 더 쉽고 명쾌한 주식 책은 없다! 지금은 주식투자를 반드시 해야만 하는 시대다. 많은 이들에게 주식투자는 필수적인 상황이 되었다. 과거엔 은행 적금만 들어도 내 노후가 든든히 보장되었다면, 금리가 워낙 낮아 이젠 열심히 주식이라도 굴리지 않으면 암울한 100세 시대를 맞이할 수밖에 없다.", "2020.09.01", "self-help", 1),
("아우렐리우스의 명상록", "마르쿠스 아우렐리우스", "삶과 죽음에 대한 위대한 통찰이 담긴 불멸의 고전 마르쿠스 아우렐리우스는 로마제국을 20년 넘게 다스렸던 16대 황제로 로마제국의 중흥 시대를 이끌었던 5현제의 마지막 황제이기도 하다.", "2020.08.11", "Classical", 2),
("톨스토이의 인생론", "레프 톨스토이", "톨스토이가 말하는 ‘어떻게 살아야 할 것인가?’레프 톨스토이는 세계적인 대문호이자 위대한 사상가이기도 하다. 1869년 『전쟁과 평화』를 발표해 세계적인 작가로서의 명성을 얻었고 1877년 『안나 카레니나』를 완성한 이후 원시 그리스도교에 복귀해 근로·채식·금주·금연의 생활을 영위했다.", "2020.08.11", "Classical", 2),
("당신과 반려견 사이", "유상우", "정신과 의사의 눈으로 바라본 반려견과의 특별한 시그널 이야기 개는 인간을 위한 존재가 아니라 오랜 역사와 다양한 개성, 복잡한 감정을 지닌 하나의 생명체다.", "2018.12.03", "Novel", NULL),
("중학생이라면 꼭 알아야 할 교과서 과학", "전형구", "기본 개념을 정확히 알아야 과학과 친해진다! 어렵다고 느꼈던 과학을 풍부한 비유와 예시로 쉽고 재미있게 배울 수 있는 중학교 과학 학습서다. 이 책에서는 중학교 1학년부터 3학년까지의 교육과정에 나오는 내용들을 물리, 화학, 생물, 지구과학의 영역으로 나누어 꼭 알아야 할 주요 개념을 설명한다.", "2018.06.15", "self-help", 4);