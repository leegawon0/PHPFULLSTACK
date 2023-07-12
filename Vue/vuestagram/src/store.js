import { createStore } from 'vuex'
import axios from 'axios'

const store = createStore({
    state() {
        return {
            boardData: [], //게시글 데이터
            lastId: '', //가장 마지막에 로드된 게시물의 ID
            moreflg: true, // 더보기 버튼 표시용 플래그
            tabflg: 0, // 탭 UI flg (0:메인, 1:필터, 2:작성)
            imgUrl: '', // 이미지 url
            filter: '',
            file: null,
        }
    },
    mutations: {
        // 초기 데이터 세팅용
        createBoardData(state, data) {
            state.boardData = data;
            this.commit('changeLastId', data[data.length - 1].id);
        },
        // 더보기 데이터 세팅용
        addBoardData(state, data) {
            state.boardData.push(data);
            this.commit('changeLastId', data.id);
        },
        // lastId 변경
        changeLastId(state, id) {
            state.lastId = id;
        },
        // 탭UI flg 변경
        changeTabflg(state, num) {
            state.tabflg = num;
        },
        // 이미지 Url 변경
        changeImgUrl(state, imgUrl) {
            state.imgUrl = imgUrl;
        },
        // 업로드 이미지 필터 변경
        changeFilter(state, filter) {
            if(state.filter == filter) {
                state.filter = '';
            } else {
                state.filter = filter;
            }
        },
        // 초기화
        clearState(state) {
            state.filter = '';
            state.imgUrl = '';
            state.file = null;
        },
        // 이미지 업로드
        changeImg(state, file) {
            state.file = file;
        },
        changeContent(state, message) {
            state.content = message;
        }, 
        // 작성글 데이터 셋팅용
        addWriteData(state, data) {
            state.boardData.unshift(data);
        }
    },
    actions: {
        // 메인 게시글
        getMainList(context) {
            axios.get('http://192.168.0.66/api/boards')
            .then(res => { 
                context.commit('createBoardData', res.data);
            })
        },
        // 게시글 추가 습득
        getMoreList(context) {
            axios.get('http://192.168.0.66/api/boards/' + context.state.lastId)
            .then(res => {
                if(res.data) {
                    context.commit('addBoardData', res.data);
                } else {
                    context.state.moreflg = false;
                    alert('페이지의 끝입니다.');
                }
            })
            .catch( err => {
                console.log(err);
            })
        }, 
        // 게시글 작성
        writeContent(context) {
            let content = document.getElementById('content');
            const header = {
                headers: {
                    'Content-Type' : 'multipart/form-data'
                }
            };
            const data = {
                name: '이가원',
                filter: context.state.filter,
                img: context.state.file,
                content: content.value,
            }
            console.log(data);
            axios.post('http://192.168.0.66/api/boards', data, header)
            .then(res => {
                console.log(res);
                // context.dispatch('getMainList');
                // context.dispatch('getMainList');
                context.commit('addWriteData', res.data);
                context.commit('changeTabflg', 0);
                context.commit('clearState');
            })
            .catch( err => {
                console.log(err);
            })
        }
    }
})

export default store