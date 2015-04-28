import java.io.*;
import java.net.*;


public class ServerTest {

    ServerSocket s;

    public void go() {

        try {
            s = new ServerSocket(9999);
			
            while (true){
				Socket incoming = s.accept();
				Thread t = new Thread(new MyCon(incoming));
                
                t.start();
            }
        } catch (IOException e) {
			new ServerTest().go();
			System.out.println("This Error");
            e.printStackTrace();
        }		
    }

    class MyCon implements Runnable {

        Socket incoming;

        public MyCon(Socket incoming) {

            this.incoming = incoming;
        }

        @Override
        public void run() {

	
            try {
                PrintWriter pw = new PrintWriter(incoming.getOutputStream(),
                        true);
                InputStreamReader isr = new InputStreamReader(
                        incoming.getInputStream());
                BufferedReader br = new BufferedReader(isr);
                String inp = null;

                boolean isDone = true;

                while (isDone && ((inp = br.readLine()) != null)) {

                    System.out.println(inp);
					
					if(!inp.trim().equals("BYE")){
					
						try(PrintWriter out = new PrintWriter(new BufferedWriter(new FileWriter("studentanswers.txt", true)))) {
								out.println(inp);
						}catch (IOException e) {
							
						}
					}
					
                    if (inp.trim().equals("BYE")) {
                        System.out
                                .println("THANKS FOR CONNECTING...Bye for now");
                        isDone = false;
						inp = null;
                        s.close();
                    }

                }
            } catch (IOException e) {
                // TODO Auto-generated catch block
                try {
                    s.close();
                } catch (IOException e1) {
                    // TODO Auto-generated catch block
                    e1.printStackTrace();
                }
                e.printStackTrace();
            }
			
        }

    }

    public static void main(String[] args) {

        new ServerTest().go();

    }

}