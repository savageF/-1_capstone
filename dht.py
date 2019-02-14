import time
import serial   # <1>

def main():
    port = serial.Serial("/dev/ttyACM0", baudrate=9600, timeout=None)   # <2>
    while True:
        line = port.readline()  # <3>
        arr = line.split()  # <4>
        if len(arr) < 3:    # <5>
            continue    # <6>
        print("/* Original Data */")
        print(line)

        print("/* Customized Data */")
        dataType = arr[2]
        data = float(arr[1])    # <7>
        if dataType == '%':
            print("Humidity in Pi: %.1f %%" % data)
        else:
            print("Temperature in Pi: %.1f C" % data)

        print("\n\n")
        time.sleep(0.01)

if __name__ == "__main__":
    main()
