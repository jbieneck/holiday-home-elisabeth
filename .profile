alias ll='ls -la'

export PATH=/usr/local/bin:$PATH

if [ -f $HOME/.customrc ]; then
   . $HOME/.customrc
fi
