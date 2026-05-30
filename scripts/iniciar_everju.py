# para abrir new terminal
# ctrl + shift + '

#missoes
# abrir terminal escrever ipconfig 
# copiar oque ver dps do ipv4
# colar no php artisan serve --port=8000 --host=

# abrir novo terminal e executar
# npm run dev -- --host
# alterar o vite.config.js

import pyautogui
import time
import subprocess



ipconfig = subprocess.check_output("ipconfig").decode("cp1252")

ip = None

for linha in ipconfig.splitlines():
    if "IPv4" in linha:
        linha = linha.split(':')
        break

ip = linha[1].strip()

time.sleep(5)

pyautogui.hotkey('ctrl', 'shift', 'p')

time.sleep(1)

pyautogui.write(
    'create new terminal',
    interval=0.1
)

pyautogui.press('enter')

time.sleep(1)

pyautogui.press('enter')

time.sleep(1)

pyautogui.write(
    f"php artisan serve --port=8000 --host={ip}",
    interval=0.1
)

pyautogui.press('enter')

pyautogui.hotkey('ctrl', 'shift', '5')

time.sleep(1)

pyautogui.write(
    'npm run dev -- --host',
    interval=0.1
)

pyautogui.press('enter')

exit