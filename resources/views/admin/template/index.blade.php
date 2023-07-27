
    <style>
        *{
    margin: 0;
    box-sizing: border-box;
}
body{
    background: linear-gradient(to right,cornflowerblue, #f6f6f6);
}

div.main{
    width: 60rem;
    height: 25rem;
    margin: 5rem auto;
    background-color: #f6f6f6;
    border-radius: 1rem;
}
h1{
    background: linear-gradient(to left,#2f2f2f, #8f8f8f);
    text-align: center;
    -webkit-background-clip: text;
    color: transparent;
    padding: 1rem;
    font-size: 2.5rem;
}
form{
    display: grid;
    grid-template-columns: 1fr 1fr ;
    grid-gap: 0.25rem;
    margin: 2rem 0;
}
.content{
    height: 5rem;
}


input{
    margin: 0 0.75rem;
    appearance: none ;
    border: none;
    width: 25rem;
    height: 2rem;
    font-size: 1.25rem;
    font-family: 'Times New Roman', Times, serif;
    background-color: #f6f6f6;
    border-bottom: 2px solid #4b556b;
    transition: 0.3s ease;
}
input:hover{
    font-size: 1.75rem;
}
input:focus-visible{
    height: 1.75rem;
    height: 3rem;
    border: none;
    background-color: #fff;
}


button{
    appearance: none;
    background: linear-gradient(to left, rgb(19, 87, 19), rgb(19, 128, 19), rgb(20, 184, 20) );
    font-size: 1.5rem;
    border: none;
    width: 25rem;
    height: 3rem;
    margin: 0 1rem;
    color: #f6f6f6;
    transition: 0.3s ease;
}
button:hover{
    border-radius: 0.5rem;
    box-shadow: 4px 4px 10px #4b556b;
}
.reset{
    background: linear-gradient(to right,rgb(89, 141, 236) 60%, rgb(173, 202, 255));
}

@media screen  and (max-width:800px){
    div.main{
        width: 20rem;
        height: 36rem;
    }
    form{
        display: grid;
        grid-template-columns: 1fr ;
        grid-gap: 0;
        margin: 1rem 0;
    }
    input{
        width: 18rem;
        height: 1.5rem;
    }
    button{
        width: 18rem;
        height: 4rem;
    }
}
    </style>
    <div class="main">

        <h1>Add Template</h1>
        <form action="{{route('template.store')}}"  method="post">
            @csrf
            <div class="content">
                <input type="text"  name="name" placeholder="Name">
            </div>

            <div class="content">
                <input type="text" name="title"  placeholder="Title">
            </div>

            <div class="content">
                <input type="text" name="url"  placeholder="Url">
            </div>

            <div class="content">
                <input type="text" name="file"  placeholder="File">
            </div>

            <div class="content">
                <input type="text"  name="folder" placeholder="Folder">
            </div>

            <div class="content">
                <input type="text"  name="assets" placeholder="Assets">
            </div>

            <div class="content">
                <button type="submit">Submit</button>
            </div>
    </form>

    </div>
