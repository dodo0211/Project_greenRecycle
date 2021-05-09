function check_input() {
    if (!document.member_form.id.value) {
        alert("아이디를 입력하세요!");
        document.member_form.id.focus();
        return;
    }

    if (!document.member_form.password.value) {
        alert("비밀번호를 입력하세요!");
        document.member_form.password.focus();
        return;
    }

    if (!document.member_form.password_confirm.value) {
        alert("비밀번호 재확인을 입력하세요!");
        document.member_form.password_confirm.focus();
        return;
    }

    if (!document.member_form.name.value) {
        alert("이름을 입력하세요!");
        document.member_form.name.focus();
        return;
    }

    if (!document.member_form.email.value) {
        alert("이메일 주소를 입력하세요!");
        document.member_form.email.focus();
        return;
    }

    if (document.member_form.password.value !=
        document.member_form.password_confirm.value) {
        alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
        document.member_form.password.focus();
        document.member_form.password.select();
        return;
    }

    // 서버에 전송하는 기능 (member insert.php에)
    document.member_form.submit();
}

// function check_id() {
//     window.open("register_check_id.php?id=" + document.member_form.id.value,
//         "IDcheck",
//         "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
// }

function check_id() {
    document.getElementById("check_id_tr").style.display = "table-row";

    const id = document.member_form.id.value;
    const regexp_result_id = /^([\w]{6,})$/g.exec(id);
    const elm_regexp = document.getElementById("condition_id_regexp");

    if (regexp_result_id === null) {
        elm_regexp.style.color = "#8e0000";
        elm_regexp.getElementsByTagName('span')[0].innerHTML = "X ";
    } else {
        elm_regexp.style.color = "#00c853";
        elm_regexp.getElementsByTagName('span')[0].innerHTML = "O ";
    }
}

function check_id_on() {
    const id = document.member_form.id.value;
    const regexp_result_id = /^([\w]{6,})$/g.exec(id);

    if (regexp_result_id === null) {
        document.getElementById("check_id_window").style.display = "block";
    } else {
        $.ajax({
            method: "POST",
            url: "register_check_id.php",
            data: { id: regexp_result_id[0] }
        })
        .done(function( response ) {
            $("div#check_id_window").html(response);
            document.getElementById("check_id_window").style.display = "block";
        });
    }
}

function check_id_off() {
    document.getElementById("check_id_window").style.display = "none";
}