#codigo para tirar foto 
#ate o utilizador presionar x

import sys
from turtle import delay
import cv2 as cv
from requests import (post, get)

camera = cv.VideoCapture(0)
delay = 3000
url = 'http://127.0.0.1/api/upload.php'

def send_file(file):
    print("A enviar...")
    r = post(url, files=file)
    print(r.status_code, " -- ", r.text)

try:
    print("Prima CTRL+C para terminar")
    while True:
        print("------------------------------")
        print("A capturar imagem")
        ret, image = camera.read()
        print("Resultado " + str(ret))
        print("A Guardar")
        cv.imwrite('camara.jpg', image)
        file = {'imagem': open('camara.jpg', 'rb')}
        send_file(file)
        print("Next in: " + str(delay/1000) + " sec.")
        cv.waitKey(delay)

except KeyboardInterrupt:
    print("Terminado pelo Util")

except :
    print("Ocorreu um erro", sys.exc_info())

finally:
    print("Fim")
    camera.release()
    cv.destroyAllWindows()