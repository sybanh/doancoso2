<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <style>
      .toasts {
        position: fixed;
        top: 10px;
        right: 10px;
        animation: slide_show 4s ease forwards;
        display: none;
      }
      .toast {
        width: 300px;
        height: 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: rgba(0, 128, 0, 0.4);
        padding: 10px;
        border-radius: 4px;
        border: none;
        border-left: 6px solid rgb(0, 128, 0);
        overflow: hidden;
      }
      .toast__icon i {
        font-size: 20px;
        color: #fff;
      }
      .toast__text {
        font-size: 16px;
        color: #fff;
      }
      .border__bot {
        position: absolute;
        width: 100%;
        background: rgb(0, 128, 0);
        bottom: 0;
        left: 0;
        height: 4px;
        animation: countdown 5s ease forwards;
      }
      @keyframes countdown {
        0% {
          width: 100%;
        }
        100% {
          width: 0%;
        }
      }
      @keyframes slide_show {
        0% {
          transform: translateX(100%);
        }
        25% {
          transform: translateX(-10%);
        }
        50% {
          transform: translateX(0%);
        }
        100% {
          transform: translateX(-10px);
        }
      }
      @keyframes slide_hige {
        0% {
          transform: translateX(-10%);
        }
        25% {
          transform: translateX(0%);
        }
        50% {
          transform: translateX(-10%);
        }
        100% {
          transform: translateX(200%);
        }
      }
      .block {
        display: block;
        animation: slide_hige 2s ease forwards;
      }
    </style>
  </head>
  <body>
  <button class="btn__item">
                      <a class="btn__item-link" href="">THÊM VÀO GIỎ</a>
                    </button>
    <div class="toasts">
      <div class="toast">
        <div class="toast__icon">
          <i class="bx bxs-check-circle"></i>
        </div>
        <h5 class="toast__text">Sản phẩm đã được thêm vào giỏ hàng</h5>
        <span class="border__bot"></span>
      </div>
    </div>
  </body>
  <script src="./js/message.js"></script>
</html>
