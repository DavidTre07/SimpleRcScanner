# SimpleRcScanner

[Demo](http://test.sui.li/oszi): This demo doesn't integrate last changes

The script requires data in which the first level is always low. Otherwise the plot will be vertically flipped. \
You can also paste data on the first line of ReceivedSignalVisualizer.ods LibreOffice Calc spreadsheet. Only the first 50 timings will be plotted.

Tutorial page: <https://github.com/sui77/rc-switch/wiki/Add_New_Remote_Part_1>

## Change log

2023 01 10: David Tre (<https://github.com/davidtre07>)\
- Added normalize.py script to change pulse length to a new one\
  So when retransmitting this pulse stream it will ease the receptor to understand it\
- Added Dockerfile so you can run it in a docker\
  To build it: `docker build . -t simplercscanner`\
  To start it: `docker run --rm -p 2080:80 --name simplercscanner simplercscanner`\
    Now you can connect to it on port 2080 (http://localhost:2080)

2022 12 04: David Tre (<https://github.com/davidtre07>)\
- Allow multilines as input\
- Added gitignore file

2022 12 03: David Tre (<https://github.com/davidtre07>)\
- Support esphome dump (<https://esphome.io/components/remote_transmitter.html#setting-up-rf-devices>)\
  (The dump provides negatives values)\
- Added console logging\
- Increase font size
