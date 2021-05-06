<?php 
    class UserInfo {
        private string $id;
        private string $name;
        private string $gender;
        private string $mobile;

        public function __construct(string $id, string $name, string $gender, string $mobile) {
            $this->id = $id;
            $this->name = $name;
            $this->gender = $gender;
            $this->mobile = $mobile;
        }

        public function __get($property) {
            if (property_exists($this, $property)) {
                return $this->$property;
            }
        }

        public function __set($property, $value) {
            if (property_exists($this, $property)) {
                $this->$property = $value;
            }

            return $this;
        }
    }

    $userInfo = new UserInfo(
        isset($_GET["id"]) ? $_GET["id"] : "",
        isset($_GET["name"]) ? $_GET["name"] : "",
        isset($_GET["gender"]) ? $_GET["gender"] : "",
        isset($_GET["mobile"]) ? $_GET["mobile"] : "",
        isset($_GET["birthyear"]) ? $_GET["birthyear"] : ""
    );
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/common/lib/head.php"; ?>
    <link rel="stylesheet" href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/register/register.css?after=1">
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/common/lib/header.php"; ?>
    </header>

    <nav>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/common/lib/nav.php"; ?>
    </nav>

    <main>
        <div class="common-container">
            <div id="box">
                <div id="title">
                    <div>회원가입</div>
                    <div>*필수입력사항</div>
                </div>
                <form name="member_form" method="post" action="./register_insert.php">
					<table>
						<tr>
							<th>아이디(ID)</th>
							<td>
                                <input type="text" name="id" placeholder="6자 이상의 영문 혹은 영문과 숫자를 조합">
								<input type="button" value="중복 확인" onclick="check_id()">
							</td>
						</tr>
						<tr>
							<th>비밀번호</th>
							<td>
                                <input type="password" name="password" placeholder="비밀번호를 입력해주세요.">
							</td>
						</tr>
						<tr>
							<th>비밀번호 확인</th>
							<td colspan="2">
                                <input type="password" name="password_confirm" placeholder="비밀번호를 한 번 더 입력해주세요.">
                            </td>
						</tr>
						<tr>
							<th>이름</th>
							<td>
                                <input type="text" name="name" placeholder="이름을 입력해주세요">
							</td>
						</tr>
						<tr>
							<th>이메일(E-mail)</th>
							<td>
                                <input type="text" name="email" placeholder="예:chorkrecycle@chorokrecycle.com">
							</td>
						</tr>
						<tr>
							<th>휴대폰</th>
							<td>
                                <input type="text" name="mobile" placeholder="숫자만 입력해주세요">
							</td>
						</tr>
						<tr>
							<th>성별</th>
							<td>
                                radio button
							</td>
						</tr>
						<tr>
							<th>생년월일</th>
							<td>
                                input
							</td>
						</tr>
					</table>
					<br>
					<div>
						<!-- 회원가입 양식 확인 후 전송하기 때문에 submit이 아닌 button -->
						<input type="button" value="초기화" onclick="reset_form()">
						<input type="button" value="회원가입" onclick="check_input()">
					</div>
				</form>
            </div> <!-- login_box -->
        </div>
    </main>

    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/common/lib/footer.php"; ?>
    </footer>

</body>

</html>