

	<!DOCTYPE html>
	<html>
	    <head>
	        <meta charset="UTF-8">
	        <title>File Record</title>
	    </head>
	
	    <body>
	        <canvas id="canvas" width="640" height="360"></canvas>
	        <video id="video" autoplay loop muted>
			    <source src="../media/video.mp4"/>
			</video>
	        <button id="button-start">开始录制</button>
	        <button id="button-stop">结束录制</button>
	    </body>
	
	    <style>
	        * {
	            margin: 20px;
	            font-size: 0px;
	            box-sizing: border-box;
	        }
	
	        #canvas {
	            display: none;
	        }
	
	        #video {
	            width: 640px;
	            height: 360px;
	            background: deepskyblue;
	            display: block;
	            border-radius: 2px;
	            box-shadow: 0 1px 1.5px 1px rgba(0, 0, 0, 0.12);
	        }
	
	        #button-start {
	            width: 300px;
	            height: 75px;
	            box-sizing: border-box;
	            background: linear-gradient(#FF000011, #FF000044) orange;
	            color: white;
	            font-size: 16px;
	            font-family: "monospace";
	            border: none;
	            outline: none;
	            border-radius: 2px;
	            box-shadow: 0 1px 1.5px 1px rgba(0, 0, 0, 0.12);
	            user-select: none;
	        }
	
	        #button-start:hover {
	            background: linear-gradient(#FF000033, #FF000077) orange;
	        }
	
	        #button-start:active {
	            background: linear-gradient(#FF000055, #FF000099) orange;
	        }
	
	        #button-start[disabled] {
	            background: gray;
	        }
	
	        #button-stop {
	            width: 300px;
	            height: 75px;
	            box-sizing: border-box;
	            background: linear-gradient(#9933FF00, #9933FF33) dodgerblue;
	            color: white;
	            font-size: 16px;
	            font-family: "monospace";
	            border: none;
	            outline: none;
	            border-radius: 2px;
	            box-shadow: 0 1px 1.5px 1px rgba(0, 0, 0, 0.12);
	            user-select: none;
	        }
	
	        #button-stop:hover {
	            background: linear-gradient(#9933FF22, #9933FF66) dodgerblue;
	        }
	
	        #button-stop:active {
	            background: linear-gradient(#9933FF44, #9933FF88) dodgerblue;
	        }
	
	        #button-stop[disabled] {
	            background: gray;
	        }
	    </style>
	
	    <script>
	        let canvasElement = document.querySelector("#canvas");
	        let videoElement = document.querySelector("#video");
	        let startButton = document.querySelector("#button-start");
	        let stopButton = document.querySelector("#button-stop");
	
	        const videoWidth = 640;
	        const videoHeight = 360;
	        const frameRate = 60;
	        const encodeType = "video/webm;codecs=vp8";
	
	        let chunks = [];
	
	        let frameId = null;
	
	        //设置画布背景
	        const canvasContext = canvasElement.getContext("2d");
	        canvasContext.fillStyle = "deepskyblue";
	        canvasContext.fillRect(0, 0, canvasElement.width, canvasElement.height);
	
	        //创建MediaRecorder，设置媒体参数
	        const stream = canvasElement.captureStream(frameRate);
	        const recorder = new MediaRecorder(stream, {
	            mimeType: encodeType
	        });
	
	        //收集录制数据
	        recorder.ondataavailable = e => {
	            chunks.push(e.data);
	        };
	
	        //按钮事件
	        startButton.disabled = false;
	        stopButton.disabled = true;
	        startButton.onclick = e => {
	            startButton.disabled = true;
	            stopButton.disabled = false;
	            recorder.start(10);
	            drawFrame();
	        };
	        stopButton.onclick = e => {
	            startButton.disabled = false;
	            stopButton.disabled = true;
	            recorder.stop();
	            cancelAnimationFrame(frameId);
	            download();
	        };
	
	        //播放视频
	        function drawFrame() {
	            canvasContext.drawImage(videoElement, 0, 0, videoWidth, videoHeight);
	            frameId 