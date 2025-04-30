# PHP Serialization Vulnerability Lab

## Overview (English)
This lab demonstrates a PHP deserialization vulnerability. The vulnerability exists in the `Logger` class, which allows attackers to execute arbitrary code by crafting malicious serialized payloads.

### How to Run the Lab
1. Clone this repository:
   ```bash
   git clone https://github.com/ElliotBigFan/php-serialization.git
   cd php-serialization
   ```
2. Build and run the Docker container:
   ```bash
   docker-compose up --build
   ```
3. Access the lab in your browser at [http://localhost:7749](http://localhost:7749).

### Impact of the Vulnerability
This vulnerability allows attackers to:
- Write arbitrary files to the server.
- Execute arbitrary commands, potentially compromising the entire server.

### Mitigation
To fix this vulnerability:
1. Avoid using `unserialize()` on untrusted data.
2. Use JSON for serialization/deserialization instead of PHP's native serialization.
3. Validate and sanitize all user inputs.

---

## Tổng quan (Tiếng Việt)
Bài lab này minh họa một lỗ hổng bảo mật liên quan đến việc giải tuần tự (deserialization) trong PHP. Lỗ hổng tồn tại trong lớp `Logger`, cho phép kẻ tấn công thực thi mã tùy ý bằng cách tạo payload tuần tự hóa độc hại.

### Cách chạy Lab
1. Clone repository này:
   ```bash
   git clone https://github.com/ElliotBigFan/php-serialization.git
   cd php-serialization
   ```
2. Xây dựng và chạy container Docker:
   ```bash
   docker-compose up --build
   ```
3. Truy cập lab trong trình duyệt tại [http://localhost:7749](http://localhost:7749).

### Tác động của lỗ hổng
Lỗ hổng này cho phép kẻ tấn công:
- Ghi tệp tùy ý lên máy chủ.
- Thực thi lệnh tùy ý, có thể làm tổn hại toàn bộ máy chủ.

### Cách khắc phục
Để sửa lỗ hổng này:
1. Tránh sử dụng `unserialize()` trên dữ liệu không đáng tin cậy.
2. Sử dụng JSON để tuần tự hóa/giải tuần tự thay vì tuần tự hóa gốc của PHP.
3. Xác thực và làm sạch tất cả các đầu vào của người dùng.