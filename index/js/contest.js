//投票

let player_votes = document.querySelectorAll(".player_vote_btn");
tovote();


function tovote() {
    player_votes = document.querySelectorAll(".player_vote_btn");
    for (let i = 0; i < player_votes.length; i++) {
        player_votes[i].addEventListener("click", function () {
            whocall = "1";
            who_voted = this;
            callBack1 = function () {
                who_voted.click();
                // change_month();
                // player_sort();
            }
            showLoginForm();
            if (!islogin) {
                return;
            }
            isrest_note();

            voted = this;
            voteno = voted.parentNode.querySelector(".player_contest_no").href.split("no=");
            // console.log(voteno[1]);

            let xhr = new XMLHttpRequest();
            xhr.onload = function () {
                if (xhr.status == 200) {
                    // console.log(`成功`);
                    // console.log(`${xhr.responseText.replace(" ","")}`);

                    voted.parentNode.querySelector(".votenum").innerHTML = `${xhr.responseText.replace(" ", "")}票`;
                } else {
                    alert(xhr.status);
                }
            }

            //設定好所要連結的程式
            var url = "php/addvotes.php";
            xhr.open("post", url, true);
            xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
            //送出資料

            var data_info = `contest_no=${voteno[1]}`;
            xhr.send(data_info);
        })
    }
}

function isrest_note() {
    let xhr = new XMLHttpRequest();

    xhr.onload = function () {
        if (xhr.status == 200) {
            // console.log(`成功`);
            if (xhr.responseText == 0) {
                alert("今日票數已投完~");
                // console.log("今日票數已投完~");
            }
        } else {
            alert(xhr.status);
        }
    }
    //設定好所要連結的程式
    var url = "php/isrest_vote.php";
    xhr.open("post", url, true);
    xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    //送出資料

    var data_info = ``;
    xhr.send(data_info);
}
