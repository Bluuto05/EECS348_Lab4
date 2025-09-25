prog: main.o isOdd.o isEven.o
	$(CC) main.o isOdd.o isEven.o -o prog

main.o: main.c
	# compiles .c and makes the .o object, using the system preset compiler and the compiler warning flags.
	$(CC) $(CFLAGS) -c main.c 

isOdd.o: isOdd.c
	 # compiles .c and makes the .o object, using the system preset compiler and the compiler warning flags.
	$(CC) $(CFLAGS) -c isOdd.c

isEven.o: isEven.c
	# compiles .c and makes the .o object, using the system preset compiler and the compiler warning flags.
	$(CC) $(CFLAGS) -c isEven.c 

clean: 
	# extra command (type `make clean`) to forcibly remove/clean up any .o files and the prog file made.
	rm -rf *.o prog
