<비쥬얼 스튜디오 코드>

VS Code는 특정 언어 전용 IDE가 아니므로 개발에 필요한 기능들은 확장프로그램을 설치해서 제공받아야한다.

php 설치
https://windows.php.net/download
php 설치방법 참고
https://asufi.tistory.com/entry/Windows-10-64bit-%ED%99%98%EA%B2%BD-PHP-%EC%84%A4%EC%B9%98%ED%95%98%EA%B8%B0

PHP 개발을 위해 기본적으로 필요한 확장프로그램은 두 가지가 있다.

  1. PHP IntelliSense
  PHP를 위한 고급 자동완성 및 리팩터링을 지원합니다.

  2. PHP Debug
  PHP Debug는 디버깅 기능을 지원해주는 확장 프로그램이다.

Extensions 탭에 가서 두 가지를 설치하면 된다. Install 버튼을 누르고 설치가 완료되면 톱니바퀴 모양이 된다. 

vscode로 php파일을 만들고 실행하니까 
"PHP executable not found. Install PHP 7 and add it to your PATH or set the php.executablePath setting" 
이런 오류가 뜨면서 실행이 안되더라구요.

PHP Debug 프로그램은 설치 후 별도의 설정이 더 필요하다. 디버깅 과정을 위한 최적화 작업?으로 php 환경변수를 설정한다.






